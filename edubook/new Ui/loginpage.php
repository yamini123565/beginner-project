<html><head><title>EdubooK</title>
<script>
function validate() {
var a=document.getElementById("name").value;
if (a=="") {
	alert("enter name");
}
}
function validate1(){
	var a1=document.getElementById("email").value;
	if (a1=="") {
	alert('enter email');
}
	else{ 
	    var atpos = a1.indexOf("@");
	    var dotpos = a1.lastIndexOf(".");
	    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=a1.length) {
	        alert("Not a valid e-mail address");
	        
	    }
	}
}
function validate2(){
var a2=document.getElementById("pass").value;
if (a2.length<1) {
	alert('enter password');
}
}
function validate3(){
var a2=document.getElementById("confirmpassword").value;
var a1=document.getElementById("pass").value;
if (a2.length<1) {
	alert('enter password');
}
if(a2 != a1){
 alert('password mismatches');
}
}
</script>
<script src="js/jquery.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="css/sty.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    </head>
    <body>
	<div id="background">
		<div class="container">
			<div class="header">
			
				<div class="head-nav">
				<span class="menu" ></span>
					<ul class="cl-effect-1"><li><span class="label" style="font-size: 200%;">Welome To EduBook</span></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="#login">login</a></li>&nbsp;&nbsp;<li><a href="#register">signup</a></li></ul>
				</div>
				<div class="clearfix"> </div>
				</div>
				</div>
				<br>
<br>
<br>
<br>
<br>
				<img src="image/shutterstock_134112389.jpg" width="70%" height="70%" alt="social">
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
				
				<div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table class="table" style="text-align: left; float: right; width: 15%; height: 20%; background:#486c88;" id="log" border="1">
					  <tbody>
					    <tr>
					      <td style="vertical-align: top;">
					      <form method="post" name="login" id="login" action="login.php">
					      <label> login:-</label>
					      
					      <br><input class="input-large" placeholder="UserName(email id)" id="username" name="username" type="text">
					      <br><input class="input-large" placeholder="password" id="password" name="password" type="password"><br>
					      <input type="submit" class="btn btn-primary" value="login">(<a href="#">forgot
					password?)</a></form> </td>
					    </tr>
					  </tbody>
					</table>
					</div>
					<div> 
					
						<img src="image/blog_01.jpg" width="50%" height="50%" alt="blog"><br>
						<br>
						<br>

						<br>
						<br>

						<br>

						<br>

						

						
						<div style="color: rgb(62, 32, 242);" id="reg">
						
<p><br>
</p>
<p><br>
</p>
<p><br>
</p>
<p><br>
</p>
<p><br>
</p>
<br>
<p><br>
</p>
<br>
<p><br>
</p>
<br>
<p><br>
</p>
<br>
<p><br>
</p>
<br>
<p><br>
</p>
<br>
<p><br>
</p>
<br>
<p><br>
</p>
<br>
<p><br>
 </p>
<p><br>
</p>
<p color="blue">Register Here:-</p>

						</div>
						<div id="register">
  <img src="image/book_reviw.jpg" width="40%" height="40%" alt="book" align="right">
						<form method="post" id="reg" action="register.php">
						<p>Name * :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input-large" type="text" id="name" name="name" onBlur="validate()"><br>
						</p>
						<p>Email id *:&nbsp;&nbsp; <input class="input-large" name="email" id="email" type="text" onBlur="validate1()"><br>
						</p>
						<p>Password *:<input class="input-large"  name="pass" id="pass" type="password" onBlur="validate2()"><br>
						</p>

						<p>Confirm password *:<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="confirmpassword" name="confirmpassword" onBlur="validate3()"><br>
						Date Of Birth(DD/MM/YY)*:<span style="font-family: Abyssinica SIL;">
						<select class="select" name="date">
						<option value="01">1</option>
						<option value="02">2</option>
						<option value="03">3</option>
						<option value="04">4</option>
						<option value="05">5</option>
						<option value="06">6</option>
						<option value="07">7</option>
						<option value="08">8</option>
						<option value="09">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
						<select class="select" name="month">
						<option value="01">jan</option>
						<option value="02">feb</option>
						<option value="03">mar</option>
						<option value="04">apr</option>
						<option value="05">may</option>
						<option value="06">june</option>
						<option value="07">july</option>
						<option value="08">aug</option>
						<option value="09">sep</option>
						<option value="10">oct</option>
						<option value="11">nov</option>
						<option value="12">dec</option>
						</select>
						<select class="select" name="year">
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						<option value="1979">1979</option>
						<option value="1978">1978</option>
						<option value="1977">1977</option>
						<option value="1976">1976</option>
						<option value="1975">1975</option>
						<option value="1974">1974</option>
						<option value="1973">1973</option>
						<option value="1972">1972</option>
						<option value="1971">1971</option>
						<option value="1970">1970</option>
						</select>
						</span><br>
						Gender*: </pre><select style="font-family: Abyssinica SIL;" class="select" name="gender"><option value="male">male</option>
						<option value="female">female</option></select><br>
						<input class="btn btn-primary" type="submit" value="register" id="submit">
						<input type="reset" class="btn btn-danger" value="reset"/>
						</p>
						</form>						
						</div>

		</div>
	</div>

</div></body></html>