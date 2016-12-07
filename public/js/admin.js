$(document).ready(function(){

    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    
	$("#edit-account-content").hide();
	$("#request-content").hide();
    $("#dashboard").click(function(){
		$("#dashboard-content").fadeIn();
		$("#request-content").hide();
		
        $("#dashboard").attr('class', 'active-clicked');
        $("#requests").attr('class', 'account-sidebar');
    });
    $("#requests").click(function(){
		$("#dashboard-content").hide();
        $("#request-content").fadeIn();
        
        $("#dashboard").attr('class', 'account-sidebar');
        $("#requests").attr('class', 'active-clicked');
    });

    $(document).on('click','.pay-cancel', function() {
        console.log('pay cancel')
        $('.pay-button').show();
        $('.payment-input').hide('fast')
        $('#payment-value').val('');
    })

    $(document).on('click','.pay-button', function() {
        console.log('pay clicked')
        $('.pay-button').hide();
        $('.payment-input').show('fast')
    });

    $(document).on('click', 'a[data-toggle=modal]', function() {
        $('#table-here').html('');
        $('#buttons-here').html('');
        var transactionID = this.id;
        console.log(this.id);
        $.post('/transaction-requests',{transaction_id:transactionID} , function(data){
            $('#table-here').html(data);
        });
        $.post('/transaction-buttons',{transaction_id:transactionID} , function(data){
            $('#buttons-here').html(data);
            $('.payment-input').hide();
        });
        // $("#")
        // $("#deletePost").val(this.id);
    });

    $(document).on('click','#submit-number', function() {
        var transactionID = $("#hidden-transaction-id").val();
        var submittedNumber = $('#payment-value').val();
        console.log('submitted '+submittedNumber+' for '+ transactionID);
        // $.post('/updatePayment',{transaction_id:transactionID}, function(data) {
        //     console.log(data);
        // });
        if(submittedNumber != '') {
            $.post('/updatePayment',{transaction_id:transactionID,receipt_number:submittedNumber} , function(data){
                $('#status-text').text('paid')
                $('#download-button').prop('disabled', false);
                console.log(data);
            });
        }
    });
});