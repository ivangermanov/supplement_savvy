<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="php/login.php" method="POST">
    <div class="container">
        <div class="modal-top">
            <h1>Login</h1>
        </div>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label>
      	<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    	</label>
    	<!-- <input type="text" name="lastPage" style="display:none;"> -->
    </div>
    <div class="clearfix">
        <button type="submit" class="signup"><b>Sign in!</b></button>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="php/signup.php" method="POST">
    <div class="container">
        <div class="modal-top">
        	<h1>Create account</h1>
        </div>
        <label for="email"><b>Email</b></label>
        <span class="error"></span>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="name"><b>Name</b></label>
        <span class="error"></span>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="psw"><b>Password</b></label>
        <span class="error"></span>	
        <input id ="psw" type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <span class="error"></span>	
        <input id="psw_repeat" type="password" placeholder="Repeat Password" name="psw_repeat" required>
    </div>
    <div class="clearfix">
        <button type="submit" class="signup" onclick="signUp()"><b>Sign up!</b></button>
    </div>
  </form>
</div>