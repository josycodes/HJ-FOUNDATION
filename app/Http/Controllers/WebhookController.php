<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class WebhookController extends Controller
{
    //
    public function index(){
        //get post body
        $body = @file_get_contents("php://input");
        //get response inside post body
        $response = json_decode($body);
        //transaction reference
        $reference = $response->txRef;
        $transaction_id = $response->id;
        $transaction_status = $response->status;
        DB::table('flutterwavehookslog')->insert(
            ['reference' => $reference, 'transaction_id' => $transaction_id, 'body' => $body]
        );

         //verify again before giving value
        if ($response->status == 'successful') {
            //verify transaction
                $verify = $this->verifyTransaction($reference);
                if ($verify === true) {
                    //transaction was successsfull
                    //check if value had been given already
                    if ($transaction->status == 'SUCCESSFULL') {
                        //no need to continue, return a successful response
                       exit(200);
                    }
                    //confirm order
                    $status = 'SUCCESSFULL';
                    $transaction->status = $status;
                    $transaction->save();
                    exit(200);

                }
        }
    }

    /**
     * Verify transaction
     *
     * @param [type] $reference
     * @return void
     */
    public function verifyTransaction($transaction_id, $reference)
    {
        $transaction = Transaction::where('transaction_id', '=', $reference)->first();
        $amount = $transaction->amount;
        $currency = $transaction->currency;
        $curl = curl_init();
        $secKey = config('values.rave_secret_key');
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/" . $transaction_id . "/verify",
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
        // echo $response;
        $resp = json_decode($response, true);
        // print_r($resp);
        $paymentStatus = $resp['data']['status'];
        $chargeAmount = $resp['data']['amount'];
        $chargeCurrency = $resp['data']['currency'];
        if(($paymentStatus == "successful") && ($chargeAmount == $amount) && ($chargeCurrency == $currency)) {
            //transaction was successful
            return true;
        } else {
            return false;
        }
    }
}