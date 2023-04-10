
              <form class="register-form" method="post" action="<?= base_url('auth/registration');?>">
              
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              
              <div class="txtb">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name');?>">
                        <?= form_error('name', '<small class="text-danger pl-3">','</small>');?>
                </div>
              
                <div class="txtb">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email');?>" >
                        <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="txtb">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">','</small>');?>
                  </div>

                  <div class="txtb">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="logbtn">
                  Register Account
                </button>
                <div class="bottom-text">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="upper-text">
                <a class="small" href="<?= base_url('auth');?>">Already have an account? Login!</a>
                </div>
              </form>
              <div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>