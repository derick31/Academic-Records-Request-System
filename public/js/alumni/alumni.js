$(document).ready(function(){

	$('.checkbox-click').click(function(){
		if($(this).is(':checked')){
			$(this).closest('div[class="row"]').find('input[type="text"]').fadeIn();
			$('#next').removeAttr('disabled');
		}
		else{
			$(this).closest('div[class="row"]').find('input[type="text"]').fadeOut();
			$('#next').attr('disabled', 'disabled');
		}
	});
	$("input[name=status]").click(function(){
		status = $("input[name=statsus]:checked").val();
		if(status == 1){
			$(".date-application").fadeIn();
		}
		else{
			$(".date-application").fadeOut();
		}
	});

	$("#category").click(function (){
		selectName = $('#category').find(":selected").text();

		if(selectName == "Others"){
			$("#others").removeClass("hide");
			$('#add-request').removeAttr('disabled');
		}
		else{
			$("#others").addClass("hide");
			$('#add-request').removeAttr('disabled');
		}		
	});

	$('.request-type-collapsibles').click(function(){
		if($(this).find('span').hasClass('glyphicon glyphicon-plus-sign')){
			$(this).find('span').removeClass('glyphicon glyphicon-plus-sign').addClass('glyphicon glyphicon-minus-sign');
		}
		else{
			$(this).find('span').removeClass('glyphicon glyphicon-minus-sign').addClass('glyphicon glyphicon-plus-sign');
		}
	});

	var nextButtonCounter = 0;
	$('#next').click(function(){
		nextButtonCounter ++;
		if(nextButtonCounter == 1){
			$('#panel1').fadeOut(function(){
				$('#panel2').fadeIn();
				$('#next').attr('disabled','disabled');
				$('#next').hide();
				$('#add-request').show();
				$('#back').removeAttr('disabled');
				$('.panel-heading h4').html('Purpose');
			});
		}

	});
	$('#back').click(function(){
		nextButtonCounter --;
		if(nextButtonCounter == 0){
			$('#panel2').fadeOut(function(){
				$('#add-request').hide();
				$('#panel1').fadeIn();
				$('#next').removeAttr('disabled');
				$('#next').show();
				$('#back').attr('disabled','disabled');
				$('.panel-heading h4').html('Applying for');
			});
			
			
		}

	});
	
	
	/////// EIMAN December 5 //////////
	$('#add-request').click(function(){
		var paymentAssessment = [];
		var price = [];
		var requests = $('form').find('input[type="text"]');
		console.log(requests[0]);
		$('input[type="text"]').each(function(){
			var request_id = $(this).attr('id');
			if($(this).val()){
				paymentAssessment.push(request_id);
				price.push($(this).val());
				console.log(paymentAssessment);
				console.log(price);
			}
		});
		$.post('/paymentassessment',{IDs:  paymentAssessment, num_of_copies: price} , function(msg){
                console.log(msg);
			  	response = '<table style="margin-bottom: 0px" class="table"><th>Form</th><th>Price</th><th>Number of Copies</th><th>Total</th>';
			  	total=0;
			  	for(i=0; i<msg['req'].length; i+=4){
			  		response += '<tr><td>' + msg['req'][i] + '</td><td>' + msg['req'][i+1] + '</td><td style="text-align: right">' + msg['req'][i+2] + '</td><td style="text-align: right">' + msg['req'][i+3] + '.00</td></tr>';
			  		total+=msg['req'][i+3];
			  	}
			  	response += '<tr><td></td><td></td><td></td><td style="text-align: right">' + total + '.00</td></tr></table>';
			   $('#assessment').html(response);
				// console.log(msg['req']);
				// $('html, body').removeClass('modalOverlay');
				$('#assessment-modal').modal();
            });
	});
	///// end of EIMAN DEC 5 /////////
	
	//// Aposaga Dec 5 /////
	$("#reset").click(function(){
		$("#address-error-message").html("&nbsp;");
		$("#contact-error-message").html("&nbsp;");
		$("#email-error-message").html("&nbsp;");
		$("#birth-error-message").html("&nbsp;");
		$("#father-error-message").html("&nbsp;");
		$("#mother-error-message").html("&nbsp;");
		$('input[type="text"]').removeAttr("value");
		$('input[type="email"]').removeAttr("value");
		$('input[type="number"]').removeAttr("value");
	});
	$("#submit").click(function (){
		counter = 0;
		if($("#address").val() == ""){
			counter++;
			$("#address-error-message").text("Invalid address. (e.g. Iloilo City)");
			$("#address-error-message").removeClass("hidden");
		}		
		if($("#contact-number").val() == "" || $("#contact-number").val() < 0 ){
			counter++;
			$("#contact-error-message").text("Invalid contact number. (e.g. 09123456789/ 5019050)");
			$("#contact-error-message").removeClass("hidden");
		}
		if($("#email").val() == ""){
			counter++;
			$("#email-error-message").text("Invalid email. (e.g. charlesaposaga@gmail.com)");
			$("#email-error-message").removeClass("hidden");			
		}
		if($("#birth").val() == ""){
			counter++;
			$("#birth-error-message").text("Invalid birthplace. (e.g. Miagao, Iloilo)");
			$("#birth-error-message").removeClass("hidden");		
		}
		if($("#father").val() == ""){
			counter++;
			$("#father-error-message").text("Invalid name of father. (e.g. John Eiman Mission)");
			$("#father-error-message").removeClass("hidden");	
		}
		if($("#mother").val() == ""){
			counter++;
			$("#mother-error-message").text("Invalid name of mother. (e.g. Airisse Basinang)");
			$("#mother-error-message").removeClass("hidden");		
		}						
		if(counter != 0){
			return false;
		}
		else{
			return true;
		}
	});
	//// Aposaga Dec 5 /////
});
