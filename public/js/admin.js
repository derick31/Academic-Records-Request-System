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

    $('.payment-input').hide()

    $(document).on('click','.pay-cancel', function() {
        console.log('pay cancel')
        $('.pay-button').show();
        $('.payment-input').hide('fast')
      //   var origDiv = document.getElementById("orig");
      // var close = document.getElementById("myDiv");
      // close.style.display = "none";
      // orig.innerHTML += '<button type="button" class="btn btn-primary pay-button" id="pay">Pay</button>';
    })

    $(document).on('click','.pay-button', function() {
        console.log('pay clicked')
        $('.pay-button').hide();
        $('.payment-input').show('fast')
        // var ni = document.getElementById('myDiv');
        //   var numi = document.getElementById('theValue');
        //   var num = (document.getElementById('theValue').value -1)+ 2;
        //   numi.value = num;
        //   var newdiv = document.createElement('div');
        //   var divIdName = 'my'+num+'Div';
        //   newdiv.setAttribute('id',divIdName);
        //   newdiv.innerHTML = '<input type="text"/>' + '<button id="x" type="button" class="btn btn-danger pay-cancel"><span class="glyphicon glyphicon-remove white-text" aria-hidden="true"></span></button>' + '<button type="button" class="btn btn-success">Ok</button>'
        //   ni.appendChild(newdiv);

        //   var pay = document.getElementById('pay');
        //   pay.style.display = "none";
    });

    // $(document).on('click', '.privacy-toggle', function() {
    //     var a = this.id.split('-');
    //         $.get('/post/'+a[1]+'/privacy', function(data) {
    //             $("#privacy-"+a[1]).html(data);
    //         });
    // });


});