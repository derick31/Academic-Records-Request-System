$(document).ready(function(){
	$("#edit-account-content").hide();
	$("#request-acad-rec-content").hide();
    $("#new-req-content").hide();
    $("#curr-req-content").hide();
    $("#otrcopies").hide();
    $("#gradcertcopies").hide();
    $("#engmediumcopies").hide();
    $("#cavcopies").hide();
    $("#coursedescriptioncopies").hide();
    $("#unitsearnedcopies").hide();
    $("#bonafidecopies").hide();
    $("#gwacopies").hide();
    $("#gpacopies").hide();
    $("#lawaptitudecopies").hide();
    $("#candidateforgradcopies").hide();
    $("#gradingcopies").hide();
    $("#letterobjcopies").hide();
    $("#dismissalcopies").hide();
    $("#statementcopies").hide();
    $("#idfeecopies").hide();
    $("#gradfeecopies").hide();
    $("#engtranscopies").hide();
    $("#recordverificationcopies").hide();
    $("#envelopecopies").hide();
    $("#dashboard").click(function(){
		$("#dashboard-content").fadeIn();
		$("#edit-account-content").hide();
		$("#new-req-content").hide();
		$("#curr-req-content").hide();
        
        $("#dashboard").attr('class', 'active-clicked');
        $("#edit-acct-info").attr('class', 'account-sidebar');
        $("#request-acad-record").attr('class', 'account-sidebar');
        $("#new-req").attr('class', 'account-sidebar');
        $("#curr-req").attr('class', 'account-sidebar');
    });
    $("#edit-acct-info").click(function(){
		$("#dashboard-content").hide();
        $("#edit-account-content").fadeIn();
       $("#new-req-content").hide();
        $("#curr-req-content").hide();
        
        $("#dashboard").attr('class', 'account-sidebar');
        $("#edit-acct-info").attr('class', 'active-clicked');
        $("#request-acad-record").attr('class', 'account-sidebar');
        $("#new-req").attr('class', 'account-sidebar');
        $("#curr-req").attr('class', 'account-sidebar');

    });
    $("#new-req").click(function(){
        $("#dashboard-content").hide();
        $("#edit-account-content").hide();
        $("#new-req-content").fadeIn();
        $("#curr-req-content").hide();
        
        $("#dashboard").attr('class', 'account-sidebar');
        $("#edit-acct-info").attr('class', 'account-sidebar');
        $("#request-acad-record").attr('class', 'account-sidebar');
        $("#new-req").attr('class', 'active-clicked');
        $("#curr-req").attr('class', 'account-sidebar');
    });
    $("#curr-req").click(function(){
        $("#dashboard-content").hide();
        $("#edit-account-content").hide();
        $("#new-req-content").hide();
        $("#curr-req-content").fadeIn();
        
        $("#dashboard").attr('class', 'account-sidebar');
        $("#edit-acct-info").attr('class', 'account-sidebar');
        $("#request-acad-record").attr('class', 'account-sidebar');
        $("#new-req").attr('class', 'account-sidebar');
        $("#curr-req").attr('class', 'active-clicked');
    });
    $("#otr").click(function(){
        $("#otrcopies").show();
    });
    $("#gradcert").click(function(){
        $("#gradcertcopies").show();
    });
    $("#engmedium").click(function(){
        $("#engmediumcopies").show();
    });
    $("#cav").click(function(){
        $("#cavcopies").show();
    });
    $("#coursedescription").click(function(){
        $("#coursedescriptioncopies").show();
    });
    $("#unitsearned").click(function(){
        $("#unitsearnedcopies").show();
    });
    $("#bonafide").click(function(){
        $("#bonafidecopies").show();
    });
    $("#gwa").click(function(){
        $("#gwacopies").show();
    });
    $("#gpa").click(function(){
        $("#gpacopies").show();
    });
    $("#lawaptitude").click(function(){
        $("#lawaptitudecopies").show();
    });
    $("#candidateforgrad").click(function(){
        $("#candidateforgradcopies").show();
    });
    $("#grading").click(function(){
        $("#gradingcopies").show();
    });
    $("#letterobj").click(function(){
        $("#letterobjcopies").show();
    });
    $("#dismissal").click(function(){
        $("#dismissalcopies").show();
    });
    $("#statement").click(function(){
        $("#statementcopies").show();
    });
    $("#idfee").click(function(){
        $("#idfeecopies").show();
    });
    $("#gradfee").click(function(){
        $("#gradfeecopies").show();
    });
    $("#engtrans").click(function(){
        $("#engtranscopies").show();
    });
    $("#recordverification").click(function(){
        $("#recordverificationcopies").show();
    });
    $("#envelope").click(function(){
        $("#envelopecopies").show();
    });
});