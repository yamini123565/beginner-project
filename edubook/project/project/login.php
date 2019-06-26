<html>
	<head>
		<title>NFC</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery.js"></script>
		<script>
		function tapnfc(){	
			var nfctag=$("#nfcinput").val();
			$("#msg").html("NFC TAPPED");
			var url1="http://tvstutorial.tk/project/project/nfcinput.php?nfc="+nfctag;
			$.ajax({url: url1, success: function(result){
				if(result=="success"){
					$("#nfc").css('display','none');
					$("#pin").css('display','block');
					$("#responsemsg").html(result);	
				}
				else{
					//$("#responsemsg").html(result);
				}
			}});
		}
		function tappin(){	
			var nfctag=$("#pininput").val();
			$("#msg1").html("Pin");
			var url1="http://tvstutorial.tk/project/project/pininput.php?pin="+nfctag;
			$.ajax({url: url1, success: function(result){
				if(result=="success"){	
					window.location="index.php";
				}
				else{
					$("#responsemsg1").html(result);
				}
			}});
		}
		</script>
    </head>
    <body>
	<center>
				<div id="nfc" style="display:block;">
							  <h1><label>TAP NFC</label></h1>
							  <br>
							  <input class="input-large search-query" placeholder="NFC input here" id="nfcinput" name="nfcinput" type="password"/><br>
							  <button class="btn btn-primary" onclick="tapnfc()">TAP</button> 						 
				</div>
				 <p id="msg" class="text-success"></p>
				 <p id="responsemsg" class="text-danger"></p>
				<div id="pin" style="display:none;">
							  <h1><label>ENTER PIN</label></h1>
							  <br>
							  <input class="input-large" placeholder="pin here" id="pininput" name="pininput" type="password"/><br>
							  <button class="btn btn-primary" onclick="tappin()" value="login">pin</button>					
				</div> 	
				 <p id="msg1" class="text-success"></p>
				 <p id="responsemsg1" class="text-danger"></p>
				</center>
	</body>
</html>