$(document).ready(function(){
	$("#edit-account-content").hide();
		$("#request-acad-rec-content").hide();
    $("#dashboard").click(function(){
		$("#dashboard-content").fadeIn();
		$("#edit-account-content").hide();
		$("#request-acad-rec-content").hide();
		
        $("#dashboard").attr('class', 'active-clicked');
        $("#edit-acct-info").attr('class', 'account-sidebar');
        $("#request-acad-record").attr('class', 'account-sidebar');
    });
    $("#edit-acct-info").click(function(){
		$("#edit-account-content").fadeIn();
		$("#dashboard-content").hide();
		$("#request-acad-rec-content").hide();

        $("#dashboard").attr('class', 'account-sidebar');
        $("#edit-acct-info").attr('class', 'active-clicked');
        $("#request-acad-record").attr('class', 'account-sidebar');
    });
    $("#request-acad-record").click(function(){
		$("#request-acad-rec-content").fadeIn();
		$("#dashboard-content").hide();
		$("#edit-account-content").hide();

        $("#dashboard").attr('class', 'account-sidebar');
        $("#edit-acct-info").attr('class', 'account-sidebar');
        $("#request-acad-record").attr('class', 'active-clicked');
    });
});