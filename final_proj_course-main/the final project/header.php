<html>
<head>
     <meta charset = "utf-8">
     <meta name = "description" content = "welcome to my website">
     <meta name = "viewport" content = "width=device-width,intial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/header.css">
     <script src="js/header.js"></script>
	 <link rel="stylesheet" href="css/signup-style.css">
	     <script src="js/signup.js"></script>
		 
		 
		 
		 <link rel="stylesheet" href="css/signin-style.css">
	     <script src="js/signin.js"></script>	 
</head>
<body>
  <div style="width: 100%; height: 18vh;"></div>
	<div class="container_a">
   	<a href="#" class="fa">العربيه<img src="img/egypt-flag-icon-32.png" width="20"></a></img>
    <span>This is a new store</span>
    <div class="social">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
  </div>
	<header>
				<div class="logo">
					<a href="#" id="hide-register-login" onclick="show_signup()">register</a>
				
					<a href="#" id="hide-login"onclick="showlogin()">/login </a>
				</div>
			<a  href="#" onclick="toogle()">
			<div class="container-menu-bar-icon" id="container-menu-bar-icon">
			<div class="menu-bar-icon">
	    <div class="menu-bar-icon">
			<div class="menu-bar-icon"></div>
      </div>
			</div>
			</div>
			<span style="color: white; margin: auto;" class="menu-span" id="menu-span">menu</span>
   </a>
  <span style="width: 100%; margin: 0px 20px; height: 100%; border-left: 1px solid #eee;"></span>
  <input type="text" id="text-search" placeholder="search for products">
  <img src="img/icons8-search-24.png" id="icon-search" onclick="show()">
  <a href="#"><img src="img/logo.png" id="logo-center"></a>
  <div class="x" id="close-search" onclick="closesearch()"></div>
	</header>
	<div class="contianer-drop">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <div class="dropdown">
    <button class="dropbtn">Filter
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Gategorys</h2>
      </div>
        <div class="column">
          <h3>Category</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
    </div>
  </div>
</div>
</div>
	<div class="scroll-btn">
    <i class="fas fa-arrow-circle-up"></i>
  </div>
  <div id="black" onclick="toogle()"></div>
	<div class="navbar">
		<img src="img/211652_close_icon.png" onclick="toogle()" class="colse-nav-icon">
    <div class="navbar__link" id="navbar__link">
      <a href="#" class="fa">العربيه<img src="img/egypt-flag-icon-32.png" width="20"></a></img>
    </div>
    <span style="cursor: pointer; float:right; margin:-47px 50px 0px 10px" onclick="toogle()">close</span>
<a href="#" class="navbar__link">
<span class="a_menu">Home </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">about </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">contact us </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">form </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">protoflio </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">Register/login </span>
</a>
</div>

<div id="black2" onclick="show_signup()"> </div>
	<div class="con">
	<img src="img/211652_close_icon.png" class="close_signup" onclick="show_signup()"> </img>
		<h1 class="label" id="txt">Register </h1>
		
		<form class="login_form">
			<input type="text" placeholder="Enter your username" id="username" onkeyup="signup_fun()">
				<div id="username_error">Please fill up your username</div>
			
			<input  type="text" placeholder="Enter your email" id="signup_email" onkeyup="signup_fun()">
			<div id="email_error">Please fill up your Email or username</div>
			<input type="password" name="password" placeholder="Enter Password" id="signup_password" onkeyup="signup_fun()">
		
			<div id="pass_error">Please fill up your Password</div>

			<button type="button" class="btn" onclick="signup_fun()">sign up</button>
			<p class="item"> forgot your password ?  <a href="#"> reset </a> </p>
			
			<p class="item"> do you have an account ? <a href="#"> singup  </a> </p>
			
			
			
			
			
			
		
		</form>
						    <div class="social_signup">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
	
	</div>	
	

	
	
	
	
	
	
	
		
	<div class="con_signin">
	<img src="img/211652_close_icon.png" class="close_signin" onclick="showlogin()"> </img>
		<h1 class="label" id="t">Login form</h1>
		
		<form class="login_form">
			
			<input  type="text" name="email" placeholder="Enter your email" id="email" onkeyup="fun()">
			<div id="email_error2">Please fill up your Email or username</div>
			<input type="password" name="password" placeholder="Enter Password" id="password" onkeyup="fun()">
		
			<div id="pass_error2">Please fill up your Password</div>

			<button type="button" onclick="fun()">sign in</button>
		<p class="item2"> keep me sign in	<input type="checkbox" style="width:15px;height:11px"> </input> </p>
			<p class="item2"> forgot your password ?  <a href="#"> reset </a> </p>
			
			<p class="item2"> not a member ? <a href="#"> signup  </a> 
			
				    <div class="social_signin">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
		</form>
		
	
	</div>	
	
	
	
	
</body>
</html>
