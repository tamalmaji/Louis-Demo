<?php include_once "../../partials/header.php" ?>
<div class="customer-page theme-default-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="login">
          <div class="login-form-container">
            <div class="login-text">
              <h2>Create Account</h2>

              <p>Please Register using account detail bellow.</p>

            </div>
            <div class="register-form">
              <form method="post" action="/account">


                <label for="FirstName" class="hidden-label">First Name</label>
                <input type="text" name="first_name" id="FirstName" class="input-full" placeholder="First Name" autocapitalize="words" autofocus="">

                <label for="LastName" class="hidden-label">Last Name</label>
                <input type="text" name="last_name" id="LastName" class="input-full" placeholder="Last Name" autocapitalize="words">

                <label for="Email" class="hidden-label">Email</label>
                <input type="email" name="email" id="Email" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off">

                <label for="CreatePassword" class="hidden-label">Password</label>
                <input type="password" name="password" id="CreatePassword" class="input-full" placeholder="Password">

                <label for="ConfirmPassword" class="hidden-label">Confirm Password</label>
                <input type="password" name="confirmpassword" id="ConfirmPassword" class="input-full" placeholder="Confirm Password">

                <div class="form-action-button">
                  <button type="submit" class="theme-default-button">Create</button>
                </div>
              </form>

              <div class="account-optional-action">
                <a href="../../public/index.php">Return to Store</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once "../../partials/footer.php" ?>