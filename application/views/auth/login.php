
<?= $this->session->flashdata('message'); ?>        

  <form class="login-form" method="post" action="<?= base_url('auth');?>">

        
        <h1>Login</h1>

        <div class="txtb">
          <input type="text" id="email" name="email" aria-describedby="emailHelp" value="">
          <span data-placeholder="Enter Email Address..."></span>
        </div>
        <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>

        <div class="txtb">
          <input type="password" id="password" name="password">
          <span data-placeholder="Password"></span>
        </div>
        <?= form_error('password', '<small class="text-danger pl-3">','</small>');?>

        <button type="submit" class="logbtn" value="Login"> Login </button>

          <div class="bottom-text">
                <a href="forgot-password.html">Forgot Password?</a>
          <br>
                <a href="<?= base_url('auth/registration');?>">Create an Account!</a>
        </div>

      </form>
