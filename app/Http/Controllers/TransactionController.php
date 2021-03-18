<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
class TransactionController extends Controller
{
    function __construct(){
        $this->middleware('auth', ['except'=>['getTransactionID','confirmTransaction']]);
    }

    public function getTransactionID(Request $req){
        $one = 'TRANSACTIONID';
        $two = uniqid();
        $three = rand(1, 999999999999999);
        $response = $one.$two.$three;

        $trans = new Transaction();
        $trans->transaction_id = $response;
        $trans->name = $req->name;
        $trans->phone = $req->phone;
        $trans->email = $req->email;
        $trans->currency = $req->currency;
        $trans->amount = $req->amount;
        $trans->status = 'PENDING';

        if($trans->save()){

            return response()->json($response);
        }else{
            return redirect()->route('Donate')->with("error", "Transaction not Completed");
        }

    }

    /**
     * Function to verify transaction
     *
     * @param Request $request
     * @return void
     */
    public function confirmTransaction(Request $request){
        $getID = $request->transaction_id;
        $tx_ref = $request->reference;
        $curl = curl_init();
        $secKey = config('values.rave_secret_key');
        //get the transaction
        $transaction = Transaction::where('transaction_id', '=', $tx_ref)->first();
        if($transaction->status == 'SUCCESSFULL'){
            $response = ['status' => 1, 'message' => 'Transaction was succesful'];
            return response()->json($response);
        }

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/".$getID."/verify",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
                "Authorization: Bearer " . $secKey
        ),
        ));

            $return_data  = curl_exec($curl);

            $response = json_decode($return_data);

            curl_close($curl);

            $findTrans = Transaction::where('transaction_id', '=', $tx_ref)->first();

            if($response->status == "success"){
                if($response->data->amount == $findTrans->amount){
                    if($response->data->currency == $findTrans->currency){
                        $findTrans->status = 'SUCCESSFULL';
                        if($findTrans->save()){
                             $response = ['status' => 1, 'message' => 'Transaction was succesful'];
                              return response()->json($response);
                        }else{
                        $response = ['status' => 0, 'message' => 'Transaction failed'];
                        return response()->json($response);
                        }
                    }else{
                        $findTrans->status = 'FAILED';
                        $findTrans->save();
                    $response = ['status' => 0, 'message' => 'Transaction failed'];
                    return response()->json($response);
                    }

                }else{
                    $findTrans->status = 'FAILED';
                    $findTrans->save();
                $response = ['status' => 0, 'message' => 'Transaction failed'];
                return response()->json($response);
                }
            }else{
            $response = ['status' => 0, 'message' => 'Transaction failed'];
            return response()->json($response);
            }
        // return view('pages.transaction');
    }
    public function viewAllDonation(){
        $transactions = Transaction::all();

        return view('admin.admindonate',['transaction' => $transactions]);

   }
}