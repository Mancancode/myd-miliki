<script type="text/javascript" src="js\jquery.min.js"></script>
<script type="text/javascript" src="js\jquery.appear.js"></script>
<script type="text/javascript" src="js\smooth-scroll.js"></script>
<script type="text/javascript" src="js\bootstrap.min.js"></script>
<script type="text/javascript" src="js\wow.min.js"></script>
<script type="text/javascript" src="js\owl.carousel.min.js"></script>        
<script type="text/javascript" src="js\imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js\jquery.isotope.min.js"></script> 
<script type="text/javascript" src="js\jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js\jquery.nav.js"></script>
<script type="text/javascript" src="js\equalize.min.js"></script>
<script type="text/javascript" src="js\jquery.fitvids.js"></script>
<script type="text/javascript" src="js\jquery.countTo.js"></script>
<script type="text/javascript" src="js\counter.js"></script>
<script type="text/javascript" src="js\twitterFetcher_min.js"></script>
<script type="text/javascript" src="js\main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<!-- <link rel="stylesheet" href="..\incs\css\purchase.css">
<script type="text/javascript" src="..\incs\js\purchase.js"></script> -->
<script type="text/javascript">
	function smail(){
		var msg=document.getElementById("comment").value;
		var name=document.getElementById("name").value;
		var email=document.getElementById("email").value;
		 
    if (msg == '' || name == '' || email == '') { alert('Empty input(s)'); }
    else{
    document.getElementById("sendmail").innerHTML = 'Sending..';
	  var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
          document.getElementById("sendmail").innerHTML = 'Sent Successfully';  
           $('#sendmail').prop('disabled', true);      
          } };
    xhttp.open("POST", "inc/emailprocess.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('email='+email+'&name='+name+'&comment='+msg);
  }
	}
</script>