<script type="text/javascript">
$("#form1").on('submit', function(e){
    e.preventDefault();
    var email = $("#email").val();
    var phone = $("#sec_phone").val();
    var datas = new FormData(this);
    bootbox.confirm({
        title: "Confirm Verification?",
        message: "To complete your verification process, a payment of 15,000 is required Click Confirm to continue. See details below<br><ul><li>Administration Cost &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5,000 </li><li>Verification Fee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10,000 </li></ul>",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancel'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Confirm'
            }
        },
        callback: function (result) {
            if(result === true){
                var amount = 15000*100;
                var handler = PaystackPop.setup({
                    key: 'pk_test_f89f1c1c4f6fe2f67018962197eb601ea61713af',
                    amount: amount,
                    email: email,
                    // ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                    metadata: {
                        custom_fields: [
                            {
                                display_name: "Mobile Number",
                                variable_name: "mobile_number",
                                value: phone
                            }
                        ]
                    },
                    callback: function(response){
                        if(response.reference){
                            $.ajax({
                                url: "inc/verifyRegPayment.php",
                                method: "POST",
                                data: {payment:response.reference,amount:amount,email:email},
                                cache: false,
                                success: function (data) {
                                    if (data == 'done') {
                                        $.ajax({
                                            url: "scripts/club.php", // Url to which the request is send
                                            type: "POST",             // Type of request to be send, called as method
                                            data: datas, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                                            contentType: false,       // The content type used when sending data to the server.
                                            cache: false,             // To unable request pages to be cached
                                            processData:false,        // To send DOMDocument or non processed data file it is set to false
                                            success: function(data){   // A function to be called if request succeeds
                                                if(data.replace(/\s/g,'') == "done"){
                                                    window.location.assign("login.php?ok=1")
                                                }else{
                                                    alert("An error occurred. Please contact support.")
                                                }
                                            },
                                            error : function(e){
                                                console.log(e);
                                            }
                                        });
                                    } else {
                                    alert(data)
                                        //Do something here
                                        alert('Error! Try Again.');
                                        // window.location.reload();
                                    }
                                }
                            });
                        }
                    },
                    onClose: function(){
                        alert('window closed');
                    }
                    });

                handler.openIframe();
            }else{
                bootbox.alert("You will be redirected to another page shortly");
                setTimeout(() => {
                    window.location.assign("index.php");
                }, 3000);
            }
            // console.log('This was logged in the callback: ' + result);
        }
    });

    function payWithPaystack(email, phone){
        var email = email;
        var phone = phone
        var amount = 15000*100;
        var handler = PaystackPop.setup({
        key: 'pk_test_f89f1c1c4f6fe2f67018962197eb601ea61713af',
        amount: amount,
        email: email,
        // ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        metadata: {
            custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: phone
                }
            ]
        },
        callback: function(response){
            if(response.reference){
                $.ajax({
                    url: "inc/verifyRegPayment.php",
                    method: "POST",
                    data: {payment:response.reference,amount:amount,email:email},
                    cache: false,
                    success: function (data) {
                        if (data == 'done') {
                            return "done";
                        } else {
                        alert(data)
                            //Do something here
                            alert('Error! Try Again.');
                            // window.location.reload();
                        }
                    }
                });
            }
        },
        onClose: function(){
            alert('window closed');
        }
        });

        handler.openIframe();
    }
})

$(document).ready(function(){
    bootbox.confirm({
        title: "Requirement for association registration",
        message: "These are the requirement to complete your association registration. Please review and click Confirm to continue. <br><ul><li>Application addressed to the permanent secretery</li><li>Payment of verification fee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10,000</li><li>Administration Fee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5,000 </li><li>Registration Fee (RIRS) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15,000 </li></ul>",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Cancel'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Confirm'
            }
        },
        callback: function (result) {
            if(result === true){
            }else{
                bootbox.alert("You will be redirected to another page shortly");
                setTimeout(() => {
                    window.location.assign("index.php");
                }, 3000);
            }
            // console.log('This was logged in the callback: ' + result);
        }
    });
})
</script>