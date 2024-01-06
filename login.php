<htm>
	<head>
		<title>Login</title>
	</head>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		.hero{
			height: 100%;
			width: 100%;
			background-image: linear-gradient(rgba(0, 0, 0, 0.4)), url('food.png');
			background-position: center;
			background-size: cover;
			position: absolute;
		}
		.form-box{
			width: 380px;
			height: 480px;
			position: relative;
			margin: 6% auto;
			background: #fff;
			padding: 5px;
			overflow: hidden;
		}
		.button-box{
			width: 220px;
			margin: 35px auto;
			position: relative;
			box-shadow: 0 0 20px 9px #ff61241f;
			border-radius: 30px;
		}
		.toggle-btn{
			padding: 10px 30px;
			cursor: pointer;
			background: transparent;
			border: 0;
			outline: none;
			position: relative;
		}
		#btn{
			top: o;
			left: 0;
			position: absolute;
			width: 110px;
			height: 100%;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border-radius: 30px;
			transition: .5s;
		}
		.social-icons{
			margin: 30px auto;
			text-align: center;
		}
		.social-icons img{
			width: 30px;
			margin: 0 12px;
			box-shadow: 0 0 20px 0 #7f7f7f3d;
			cursor: pointer;
			border-radius: 50%;
		}
		.input-group{
			top: 180px;
			position: absolute;
			width: 280px;
			transition: .5s;
		}
		.input-field{
			width: 100%;
			padding: 10px 0;
			margin: 5px 0;
			border-left: 0;
			border-top: 0;
			border-right: 0;
			border-bottom: 1px solid #999;
			outline: none;
			background: transparent;
		}
		.submit-btn{
			width: 85%;
			padding: 10px 30px;
			cursor: pointer;
			display: block;
			margin: auto;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border: 0;
			outline: none;
			border-radius: 30px;
		}
		.chech-box{
			margin: 30px 10px 30px 0;
		}
		span{
			color: #777;
			font-size: 12px;
			bottom: 68px;
			position: absolute;
		}
		.input-group select {
		    width: 100%;
		    padding: 10px 0;
		    margin: 5px 0;
		    border: 0;
		    outline: none;
		    background: transparent;
		    border-bottom: 1px solid #999;
		    color: #555;
		}
		#login{
			left: 50px;
		}
		#register{
			left: 450px;
		}
	</style>
	<body>
		<div class="hero">
			<div class="form-box">
				<div class="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn" onclick="login()">Log in</button>
					<button type="button" class="toggle-btn" onclick="register()">Register</button>
				</div>
				<div class="social-icons">
				<img src="fb.png">
				<img src="gp.png">
				<img src="tw.png">
			</div>
			<form id="login" action="login_process.php" method="post" class="input-group">
			    <input type="text" id="login_username" name="username" placeholder="username" class="input-field" required>
			    <input type="password" id="password" name="password" placeholder="Enter Passweord" class="input-field" required>
			    <input type="checkbox" class="chech-box"><span>Remember me ?</span>
			    <button type="submit" class="submit-btn">Log in</button>
			</form>
			<form id="register" action="register_process.php" method="post" class="input-group">
			    <input type="text" id="register_username" name="username" placeholder="Username" class="input-field" required>
			    <input type="password" id="password" name="password" placeholder="Password" class="input-field" required>
			    <input type="text" id="email" name="email" placeholder="Email" class="input-field" required>
			    <select id="usertype" name="usertype" class="input-field" required>
			        <option value="donor">Donor</option>
			        <option value="receiver">Receiver</option>
			        <option value="admin">admin</option>
			    </select>
			    <input type="text" id="county" name="town" placeholder="Town" class="input-field" required>
			    <button type="submit" class="submit-btn">Register</button>
			</form>
			</div>

		</div>
		<script type="text/javascript">
			var x =document.getElementById("login");
			var y =document.getElementById("register");
			var z =document.getElementById("btn");

			function register(){
				x.style.left = "-400px";
				y.style.left = "50px";
				z.style.left = "110px";
			}
			function login(){
				x.style.left = "50px";
				y.style.left = "450px";
				z.style.left = "0";
			}

		</script>
	</body>