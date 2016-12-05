$(document).ready(function(){
	$("#loading-div").hide();
	$("#alumnus-form").hide();
	$("#minus-symbol").hide();

	$("#alumni-content").hide();
	$("#staff-content").hide();
	$("#document-content").hide();
	/* side bars */
	$("#admin-dashboard").click(function(){
		$("#dashboard-content").fadeIn();
		$("#alumni-content").hide();
		$("#staff-content").hide();
		$("#document-content").hide();

		$("#admin-dashboard").attr("class", "active-clicked");
		$("#alumnus-records").attr("class", "account-sidebar");
		$("#staff-records").attr("class", "account-sidebar");
		$("#document-pricing-records").attr("class", "account-sidebar");
	});
	$("#alumnus-records").click(function(){
		$("#dashboard-content").hide();
		$("#alumni-content").fadeIn();
		$("#staff-content").hide();
		$("#document-content").hide();

		$("#admin-dashboard").attr("class", "account-sidebar");
		$("#alumnus-records").attr("class", "active-clicked");
		$("#staff-records").attr("class", "account-sidebar");
		$("#document-pricing-records").attr("class", "account-sidebar");
	});
	$("#staff-records").click(function(){
		$("#dashboard-content").hide();
		$("#alumni-content").hide();
		$("#staff-content").fadeIn();
		$("#document-content").hide();

		$("#admin-dashboard").attr("class", "account-sidebar");
		$("#alumnus-records").attr("class", "account-sidebar");
		$("#staff-records").attr("class", "active-clicked");
		$("#document-pricing-records").attr("class", "account-sidebar");
	});
	$("#document-pricing-records").click(function(){
		$("#dashboard-content").hide();
		$("#alumni-content").hide();
		$("#staff-content").hide();
		$("#document-content").fadeIn();

		$("#admin-dashboard").attr("class", "account-sidebar");
		$("#alumnus-records").attr("class", "account-sidebar");
		$("#staff-records").attr("class", "account-sidebar");
		$("#document-pricing-records").attr("class", "active-clicked");
	});





	// if input field clicked/focused
	$("#search-term").on("focus", function(){
		$("#loading-div").fadeIn();
	});
	$("#search-term").focusout(function(){
		$("#loading-div").fadeOut();
	});
});
