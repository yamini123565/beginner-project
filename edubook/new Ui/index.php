<?php
include 'need.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>EdubooK</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/mainstyle.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
    <script src="js/slidebars.min.js"></script>
  <script>
  function loaddata() {
    $.ajax(
      {
        url: "displaypost.php",
       success: function(result){
              $("#post_content").html(result);
  }});
  }
  </script>
  	<link rel="stylesheet" href="css/sty.css" type="text/css" media="all">
 	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <style>
  textarea{
  	resize:none;
  }</style>
  </head>
  <body onload="loaddata()">



<div class="col-md-3">
</div>

      <div id="mainbody" class="col-md-6">
                  <form name="form" method="post" action="post.php">


                      <textarea name="post" cols="45" rows="5" id="post"></textarea>
                      <br>    <button id="pp">post</button>
                   </form>
                   <div id="post_content"></div>

      </div>

<div class="col-md-3">
</div>


</body></html>
