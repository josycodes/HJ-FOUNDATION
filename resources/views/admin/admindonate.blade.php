@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaction as $t)
                    <tr>
                        <td>{{ $t->name }}</td>
                        <td>{{ $t->phone }}</td>
                        <td>{{ $t->email }}</td>
                        <td>{{ $t->amount }}</td>
                        <td><div class="btn btn-group">
                            @php
                                if($t->status == 'PENDING'){
                                   print '<a class="btn btn-warning">Pending</a>'; 
                                }elseif($t->status == 'FAILED'){
                                    print '<a class="btn btn-danger">Failed</a>';
                                }else{
                                    print '<a class="btn btn-success">Successful</a>';
                                }
                            @endphp
                            </div></td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Status</th>
                       
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        
</div>
@include('layout.footerdash')