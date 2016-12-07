
@foreach( $transactions as $transaction)
<div class="panel panel-default">
    <div class="panel-heading">Transaction #: {{ $transaction->transaction_id }} <span class="label label-success">{{ $transaction->status}}</span></div>
    <div class="panel-body">
        <span>{{ $transaction->alumnus->first_name}}</span>
        <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" id="{{$transaction->transaction_id}}">View</a>
    </div>
</div>
@endforeach