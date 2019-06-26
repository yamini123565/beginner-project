<?php 
include 'need.php';
?>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	
		<div class="wrapper">
		<center>
				<div class="container">
				  <div class="alert" style="display:none;">
				    <a href="#" class="close">&times;</a>
				    <strong id="alertmsg"></strong> 
				  </div>
				</div>
			<div class="form-style-5" >
				<form method="post" action="generate.php">
				<fieldset>
				<legend><span class="number">1</span> Shrink URL</legend>
				<input type="text" name="lurl" placeholder="Long URL *"/>
				<a href="javascript:void(0)"><span id="check">Check</span></a>
				<input id="surl" type="text" name="surl" placeholder="Custom Shrinked URL"/>
				<textarea name="description" placeholder="Description * (max length 150 chars)" maxlength="150"></textarea>
				</fieldset>
				<input type="submit" value="Generate" />
				</form>
			</div>
			<a href="logout.php">logout</a>
		</center>
	</div>
	</body>
	<script type="text/javascript">
		$("#check").click(function(){
			var surl=$("#surl").val();
			if(surl!=""){
			    $.ajax({url: "checksurlavailable.php?surl="+surl, success: function(result){
			        if(result=="exists"){
			        	$(".alert").toggleClass("alert-success");
			        	$("#alertmsg").html("The Shorten Key "+surl+" already exists. Try another!");
			        	$(".alert").show();
			        }else if(result=="available"){
			        	$(".alert").toggleClass("alert-warning");
			        	$("#alertmsg").html("The Shorten Key "+surl+" is available.");
			        	$(".alert").show();
			        }else{
			        	$(".alert").toggleClass("alert-warning");
			        	$("#alertmsg").html("Server doesnot respond");
			        	$(".alert").show();
			        }
			    },error:function(jqXHR, textStatus, errorThrown){
			    		$(".alert").toggleClass("alert-danger");
			        	$("#alertmsg").html(errorThrown);
			        	$(".alert").show();
			    }
				});
			}
		});
		$(".close").click(function(){
			$(".alert").hide();
			$(".alert").toggleClass("alert-warning");
		});
		</script>
</html>