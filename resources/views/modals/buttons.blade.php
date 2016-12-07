
@if ($transaction->status == 'pending')
<button class="btn btn-primary pay-button pull-left" id="pay">Pay</button>
<div class="input-group payment-input">
    <input type="text" class="form-control" id="payment-value">
    <div class="input-group-btn">
        <button type="button" class="btn btn-danger pay-cancel"><span class="glyphicon glyphicon-remove white-text" aria-hidden="true"></span></button>
        <button type="button" class="btn btn-success" id="submit-number">submit</button>
    </div>
</div>
@endif
@if ($transaction->status == 'paid')
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary pay-button pull-left" id="download">Download</button>
            <p>download documents</p>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary pay-button pull-left" id="ready">Ready For Pickup</button>
        </div>
    </div>
@endif