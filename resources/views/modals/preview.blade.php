<div class="row">
   <div class="col-md-4">
       <p>{{ $transaction->alumnus->first_name}}</p>
   </div>
   <div class="col-md-4 text-center">
       <p>{{ $transaction->created_at}}</p>
   </div>
   <div class="col-md-4 text-right">
       <p id="transaction-id-view">{{ $transaction->transaction_id}}</p>
       <input type="hidden" id="hidden-transaction-id" value="{{ $transaction->transaction_id}}" >
   </div>
</div>
<div class="row">
   <div class="col-md-12">
       <table style="margin-bottom: 0px" class="table">
        <th>Form</th>
        <th>Price</th>
        <th>Number of Copies</th>
        <th>Total</th>
        @foreach ($requests as $request)
        <tr>
            <td>{{ $request->request_description }}</td>
            <td>{{ $request->price }}</td>
            <td style="text-align: right">{{ $request->pivot->copies }}</td>
            <td style="text-align: right">{{ $request->pivot->copies*$request->price }}</td>
        </tr>
        @endforeach
   </div>
</div>
<div class="row">
    <div class="col-md-12">
        Status: <span id="status-text">{{ $transaction->status }}</span>
    </div>
</div>
