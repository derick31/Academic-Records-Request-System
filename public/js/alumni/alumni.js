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
		status = $("input[name=status]:checked").val();
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
		// if(nextButtonCounter == 2){
		// 	$('#panel2').fadeOut(function(){
		// 		$('#panel3').fadeIn();
		// 		$('#next').attr('disabled','disabled');
		// 		$('#next').hide();
		// 		$('#add-request').show();
		// 		$('.panel-heading h4').html('PURPOSE');
		// 	});
			
		// }

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
		// if(nextButtonCounter == 0){
		// 	$('#panel2').fadeOut(function(){
		// 		$('#panel1').fadeIn();
		// 		$('#back').attr('disabled', 'disabled');
		// 		$('.panel-heading h4').html('APPLICATION STATUS');
		// 	});
			
		// }

	});
});
