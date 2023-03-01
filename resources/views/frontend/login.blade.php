@extends('frontend.layouts.main')
@section('content')

<style>
  body {
    background-image: white;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: "Open Sans", sans-serif;
    color: #333333;
    padding-top: 30px;
  }
  
  .box-form {
    margin: auto;
    width: 70%;
    height: 700px;
    background: #FFFFFF;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex: 1 1 100%;
    align-items: stretch;
    justify-content: space-between;
    box-shadow: 0 0 20px 6px #1e1e3085;
  }
  @media (max-width: 980px) {
    .box-form {
      flex-flow: wrap;
      text-align: center;
      align-content: center;
      align-items: center;
    }
  }
  .box-form div {
    height: auto;
  }
  .box-form .left {
    color: #FFFFFF;
    background-size: cover;
    background-repeat: no-repeat;
    overflow: hidden;
    
  }
  .box-form .left .overlay {
    padding: 30px;
    width: 600px;
    height: 100%;
    background: rgba(249, 68, 68, 1);
    overflow: hidden;
    box-sizing: border-box;
  }

  .box-form .left .overlay .span img {
    padding-top: 60px;
    padding-left: 200px;
    width: 230px;
    height: 230px;
  }

  .box-form .left .overlay h2 {
    font-size: 75;
    padding-top: 20px;
  }

    .box-form .left .overlay h3 {
    padding-top: 100px;
    font-size: 10;
    }

  .box-form .left .overlay span p {
    margin-top: 30px;
    font-weight: 900;
  }
  .box-form .left .overlay span a {
    /* background: #3b5998; */
    color: #FFFFFF;
    margin-top: 10px;

    padding: 14px 50px;
    border-radius: 100px;
    display: inline-block;
    box-shadow: 0 3px 6px 1px #042d4657;
  }
  .box-form .left .overlay span a:last-child {
    background: #1dcaff;
    margin-left: 30px;
  }
  .box-form .right {
    padding: 100px;
    width: 500px;
    overflow: hidden;
  }
  @media (max-width: 980px) {
    .box-form .right {
      /* width: 100%; */
    }
  }
  .box-form .right h5 {
    padding-left: 100px;
    font-size: 2vmax;
    font-weight: Medium;
    line-height: 0;
    color: rgba(249, 68, 68, 1);
  }
  .box-form .right p {
    font-size: 14px;
    color: #B0B3B9;
    padding-left: 50px;
    
  }
  .box-form .right .inputs {
    overflow: hidden;
  }
  .box-form .right input {
    width: 100%;
    padding: 10px;
    margin-top: 25px;
    font-size: 16px;
    border: none;
    outline: none;
    border-bottom: 2px solid #B0B3B9;
  }
  .box-form .right .remember-me--forget-password p{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-left: 100px;
  }
  .box-form .right .remember-me--forget-password input {
    margin: 0;
    margin-right: 7px;
    width: auto;
  }
  .box-form .right button {
    padding-left: 1000px;
    color: rgba(249, 68, 68, 1);
    font-size: 16px;
    padding: 12px 35px;
    border-radius: 10px;
    display: inline-block;
    border: 0;
    outline: 0;
    margin-left: 90px;
    cursor: pointer;
    /* box-shadow: 0px 4px 20px 0px #49c628a6; */
    background-image: rgba(255, 255, 255, 1);
  }

  .fa fa-facebook {
    float: right;
    display: block;
  }

  .box-form .right .login-btn button{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-right: 30px;
    cursor: pointer;
  }

  .box-form .right .login-with a {
    color: rgba(249, 68, 68, 1);
    margin-top: 10px;
    margin-left: 20px;
    padding: 14px 50px;
    border-radius: 10px;
    margin-right: 20px;
    display: inline-block;
    box-shadow: 0 3px 6px 1px #042d4657;
  }

  .btn-close {
    background-color: transparent;
    border: 0;
    color : rgba(249, 68, 68, 1);
    font-size: 50px;
    margin-left: 1420px;
    cursor: pointer;
    position: absolute;
  }

  .box-form .right .login-with p {
    align-items: center;
    margin-left: 55px;
  }



</style>
<body>
    <button class="btn-close">&times;</button>
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<span>
			<h2>Welcome Back !</h2>	
            <img src="{{asset('assets/image/young man sitting with a laptop and waving his hand.png')}}" alt="Logo-Ruscation" border="0" width="200px" height="">
            <!-- <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-google" aria-hidden="true"></i></a> -->
            <h3>Untuk  mengakses RUSCATION mohon login dengan data diri anda</h3>
		</span>
		</div>
	</div>
	
	
	<div class="right">
		<h5>Login</h5>
		<div class="inputs">
			<input type="text" placeholder="username">
			<br>
			<input type="password" placeholder="password">
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
        <!-- <label>
            <input type="checkbox" name="item" checked/>
            <span class="text-checkbox">Remember me</span>
        </label> -->
			<p>lupa password?</p>
		</div>
			
			<div class="login-btn">
			    <button>Login</button>
            </div>    

            <p>Belum Punya Akun RUSCATION?</p>
            
            <button>Buat Akun</button>
            <div class="login-with">
                <p>Login dengan</p>
            </div>

            <div class="login-with">
                <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>

   </body>
</html>

@endsection