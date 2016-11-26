$(document).ready(function(){

	$('.checkbox-click').click(function(){
		if($(this).is(':checked')){
			$(this).closest('div[class="row"]').find('input[type="text"]').fadeIn();
		}
		else{
			$(this).closest('div[class="row"]').find('input[type="text"]').fadeOut();
		}
	});
	$("input[name=status]").click(function(){
		status = $("input[name=status]:checked").val();
		if(status == 1){
			$(".date-application").removeClass("hide");
		}
		else{
			$(".date-application").addClass("hide");
		}
	});

	$("#category").click(function (){
		selectName = $('#category').find(":selected").text();
		if(selectName == "Others"){
			$("#others").removeClass("hide");
		}
		else{
			$("#others").addClass("hide");
		}		
	});

	var nextButtonCounter = 0;
	var backButtonCounter = 0;
	$('#next').click(function(){
		nextButtonCounter ++;
		if(nextButtonCounter == 1){
			$('#panel1').hide();
			$('#panel2').show();
			$('#back').removeAttr('disabled');
		}
		if(nextButtonCounter == 2){
			$('#panel2').hide();
			$('#panel3').show();
			$('#next').attr('disabled','disabled');
			$('#next').hide();
			$('#add-request').show();
		}

	});
	$('#back').click(function(){
		nextButtonCounter --;
		if(nextButtonCounter == 1){
			$('#panel3').hide();
			$('#panel2').show();
			$('#add-request').hide();
			$('#next').removeAttr('disabled');
			$('#next').show();
			
		}
		if(nextButtonCounter == 0){
			$('#panel2').hide();
			$('#panel1').show();
			$('#back').attr('disabled', 'disabled');
		}

	});
});
