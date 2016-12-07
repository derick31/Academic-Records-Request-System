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

    $('.payment-input').hide()

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
        

        
        $("#transaction-id-view").text(this.id);
        $("#hidden-transaction-id").val(this.id);
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


    // $.post('/background',{image:this.id} , function(data){
    //             var url = "/uploads/"+data;
    //             $('body').css('background-image', 'url(' +url+ ')');
    //         });


});