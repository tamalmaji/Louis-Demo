<?php
require_once "../../config/_dbconnection.php";
$email = '';
$password = '';

$email_error = '';
$password_error = '';
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  // sanitize Post
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_EMAIL);

  // Put post value in ragular variable
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  // validate email
  if (empty($email)) {
    $email_error = "Please enter email";
  }
  // validate password
  if (empty($password)) {
    $password_error = "Please enter password";
  }
  // Make sure errors are empty
  if (empty($email_error) && empty($password_error)) {
    // Prepare Query
    $sql = "SELECT email , password FROM account WHERE email = :email";
    // Prepare statement
    if ($statement = $pdo->prepare($sql)) {
      // Bind params
      $statement->bindParam(':email', $email, PDO::PARAM_STR);
      // attempt to execute
      if ($statement->execute()) {
        // CHeck if email excite
        if ($statement->rowCount() === 1) {
          if ($row = $statement->fetch()) {
            $hashed_password = $row['password'];
            if (password_verify($password, $hashed_password)) {
              // Sucessfull login
              session_start();
              $_SESSION['email'] = $email;
              header('location: ../../public/index.php');
            } else {
              // Display wrong password message
              $password_err = 'The password you entered is not valid';
            }
          }
        }
      } else {
        $email_error = "No account found for that email";
      }
    }
  } else {
    die('Something went wrong');
  }
  // Close connection
  unset($pdo);
}


?>
<?php include_once "../../partials/header.php" ?>
<div class="customer-page theme-default-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="login">
          <div id="CustomerLoginForm">
            <div class="login-form-container">
              <div class="login-text">
                <h2>Login</h2>
                <p>Please login using account detail bellow.</p>
              </div>
              <div class="login-form">
                <form method="post" action="">
                  <div class="form-group">
                    <input type="email" class="form-control <?php echo (!empty($email_error)) ? 'is-invalid' : ''; ?>" name="email" placeholder="Email">
                    <samp class="invalid-feedback"><?php echo $email_error; ?></samp>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control <?php echo (!empty($password_error)) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password">
                    <samp class="invalid-feedback"><?php echo $password_error; ?></samp>
                  </div>

                  <div class="login-toggle-btn">
                    <div class="form-action-button">
                      <button type="submit" class="theme-default-button">Sign In</button>
                    </div>
                    <div class="account-optional-action">
                      <a href="./registration.php" id="customer_register_link">Create account</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once "../../partials/footer.php" ?>