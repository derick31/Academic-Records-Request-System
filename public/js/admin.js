$(document).ready(function(){
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
});