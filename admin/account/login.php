<?php include_once "../../partials/header.php" ?>
<div class="customer-page theme-default-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="login">
          <div id="CustomerLoginForm">
            <form method="post" action="">
            <div class="login-form-container">
              <div class="login-text">
                <h2>Login</h2><p>Please login using account detail bellow.</p></div>
              <div class="login-form">
                <input type="email" name="email" id="CustomerEmail" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus="">
                
                <input type="password" value="" name="password" id="CustomerPassword" class="input-full" placeholder="Password">
                
                <div class="login-toggle-btn">
                  <div class="form-action-button">
                    <button type="submit" class="theme-default-button">Sign In</button>
                  </div>
                  <div class="account-optional-action">
                    <a href="./registration.php" id="customer_register_link">Create account</a>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>     
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once "../../partials/footer.php" ?>