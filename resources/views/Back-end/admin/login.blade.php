<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width-device,initial-scale=1.0,user-scalable=no">
<title>LogIn form </title>

<style>

html {
box-sizing: border-box;
}

body {
background-color: #fff;
 color: #111;
font-family: candara;
user-select: none;
  transition: 1s;
}

.darklight {
  background-color: #111;
  color: #fff;
  transition: 1s;
}

.btn {
background-color: #fff;
 color: #111;

}

div button {
background-color: #111;
color: #fff;
padding: 10px 15px;
border: none;
outline: none;
font-weight: bold;
border-radius: 3px;
font-size: 15px;
cursor: pointer;
}

h1 {
 padding: 5px;
font-family: cooper;
 text-align: center;
margin-top: 20px;
}

section {
text-align: center;
margin-top: 35px;
font-family: sans-serif;
}

section input[type=text],input[type=password], select {
padding: 12px 20px;
	border: none;
	font-size: 15px;
    width: 20%;
	margin: 4px 0;
box-sizing: border-box;
display: inline-block;
 border-radius: 50px;
 outline: 1px solid lightblue;
}

section input[type=text]:focus, input[type=password]:focus {
	background-color: #fff;
	color: #111;
	outline: 1px solid dodgerblue;
}

section input::placeholder {
	color: #666;
	font-size: 15px;
}

section input::placeholder::hover {
 color: #111;
}

section input[type=submit].login {
	background-color: rgb(138, 42, 74);
	color: white;
 width: 20%;
 display: inline-block;
	padding: 10px 12px;
	border: none;
	outline: none;
 font-size: 16px;
 border-radius: 8px;
 cursor: pointer;
}

section input[type=submit]:hover {
	background-color: rgb(218, 78, 101);
}

section input[type=submit]:active {
	background-color: rgb(179, 65, 112);
}

section a {
color: rgb(36, 97, 158);
font-size: 14px;
}
</style>

<script>
  function darklight() {
var element = document.body;
element.classList.toggle("darklight");

  var x = document.getElementById("btn");

if(x.innerHTML === 'Dark') {
   x.innerHTML = 'Light';
}
else {
   x.innerHTML = 'Dark';
}

}

function btnBg(x) {
  x.classList.toggle("btn");
}
</script>

</head>
<body>

<div>
<button onclick="darklight();btnBg(this);" id="btn" title="Turn dark/light background!">Dark</button>
</div>

<h1>
Pollution Control System
</h1>

<section>

<h3>Welcome to the PCS LogIn form!</h3>

<form action="{{ route('admin.login.submit') }}" method="POST">
@csrf
<input type="text" name="email" placeholder="Email" id="email" required/>
<br><br>
<input type="password" name="password" placeholder="Password" id="password" required/>
<br><br>
<input type="submit" name="submit" value="Log In" class="login"/>
<br><br>
<a href="#" title="forgot password?">Forgot Password?</a>

</form>

</section>

</body>
</html>

