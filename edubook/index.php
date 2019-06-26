<?php
include 'need.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>EdubooK</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/mainstyle.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  	<link rel="stylesheet" href="css/sty.css" type="text/css" media="all">
 	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <style>
  textarea{
  	resize:none;
  }</style>
  </head>
  <body>
<!-- <table style="text-align: left; width: 100%; height: 100%;" border="0" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td colspan="3" rowspan="1" style="vertical-align: top;"> -->

  <div class="banner">
		<div class="container">
			<div class="header">
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-1">
								<li class="active"><a href="index.php">home</a></li>
								<li><a href="tutorial.php">Tutorials</a> </li>
								<li><a href="irc.php" target="posts">Irc</a></li>
								<li><a href="tutorial.php">Blog</a></li>

								<li> <a href="logout.php">logout</a></li>
								<!-- <li><?php echo $_SESSION['user']; ?>!</li> -->
									<div class="clearfix"> </div>
							</ul>
				</div>
				<div class="social">
						<ul>
							<li><a href="#"><i class="fb"></i></a></li>
							<li><a href="#"><i class="twt"></i></a></li>
							<li><a href="#"><i class="goog"></i></a></li>
								<div class="clearfix"> </div>
						</ul>
				</div>
						<div class="clearfix"> </div>
			</div>
    </div>

					<!-- script-for-nav -->
			<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->

    </div>
    <div id="leftside" class="col-md-3 bottom-grids-right wow fadeInRight data-wow-delay="0.4s"">
        <a href="tutorial.php">&nbsp;Tutorials:-</a>  <br>  <br>          <p>
          App development:-</p>
						<ul>
							<li><a href="ctutorial.php"><span> </span> C</a></li>
							<li><a href="cpptutorial.php"><span> </span> C++</a></li>
							<li><a href="javatutorial.php"><span> </span> Java</a></li>
							<li><a href="pythontutorial.php"><span> </span> Python</a></li>
							<li><a href="cstutorial.php"><span> </span>C#</a></li>
                             <p><br>
          Web development:-<br></p>
							<li><a href="htmltutorial.php"><span> </span>Html</a></li>
							<li><a href="csstutorial.php"><span> </span> Css</a></li>
							<li><a href="jstutorial.php"><span> </span> Javascript</a></li>
							<li><a href="phptutorial.php"><span> </span> Php</a></li>
                            <li><a href="rubytutorial.php"><span> </span> Ruby on Rails</a></li>
						</ul>
			</div>

      <div id="mainbody" class="col-md-6">
                  <form name="form" method="post" action="post.php">


                      <textarea name="post" cols="45" rows="5" id="post"></textarea>
                      <br>    <button id="pp">post</button>
                   </form>
                   <iframe name="posts" src="displaypost.php" id="posts" height="900" width="700">

                   </iframe>
      </div>

<div id="rightside" class="col-md-3"><br>

      <b>Other Useful Websites:-</b><br/>
      <ul class="span3">
         <li><a href="http://www.w3schools.com">W3schools</a></li><li><a href="http://www.javatpoint.com">Javatpoint</a></li>
         <li><a href="http://www.edx.com">edx</a></li>
         <li><a href="http://www.coursera.com">coursera</a></li>
	    </ul>
    </div>



</body></html>
