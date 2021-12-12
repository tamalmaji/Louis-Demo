<?php
require_once "../../config/_dbconnection.php";
$first_name = '';
$last_name = '';
$email = '';
$password = '';
$confirmpassword = '';
$date = date("Y-m-d H:i:s");

$first_name_error = '';
$last_name_error = '';
$email_error = '';
$password_error = '';
$confirmpassword_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_EMAIL);

  // Put post values in variable
  $first_name = trim($_POST['first_name']);
  $last_name = trim($_POST['last_name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $confirmpassword = trim($_POST['confirmpassword']);

  // Validation for First name
  if (empty($first_name)) {
    $first_name_error = 'Please Enter Your First Name';
  }
  // Validation for Last name
  if (empty($last_name)) {
    $last_name_error = 'Please Enter Your Last Name';
  }
  // Validation for Email
  if (empty($email)) {
    $email_error = 'Please Enter Your Email';
  } else {
    $sql = 'SELECT id  FROM account WHERE email = :email';
    if ($statement = $pdo->prepare($sql)) {
      // bind variables
      $statement->bindParam(':email', $email, PDO::PARAM_STR);
      if ($statement->execute()) {
        // check if the email is exits
        if ($statement->rowCount() === 1) {
          $email_error = 'Email is alrady taken';
        }
      } else {
        die('Somthing went Wrong');
      }
    }
    unset($statement);
  }
  // Validation for Password
  if (empty($password)) {
    $password_error = "Please enter Password";
  } elseif (strlen($password) < 8) {
    $password_error = "Password must be at least 8 characters";
  }
  // Validate confirm Password
  if (empty($confirmpassword)) {
    $confirmpassword_error = "Please enter Confirm Password";
  } else {
    if ($password !== $confirmpassword) {
      $confirmpassword_error = "Passwords do not match";
    }
  }
  // Make sure error are empty
  if (empty($first_name_error) && empty($last_name_error) && empty($email_error) && empty($password_error) && empty($confirmpassword_error)) {
    // Hash password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO account (first_name, last_name, email, password, create_at, update_at) 
    VALUES (:first_name, :last_name, :email, :password, :create_at, :update_at)";
    if ($statement = $pdo->prepare($sql)) {
      $statement->bindValue(':first_name', $first_name);
      $statement->bindValue(':last_name', $last_name);
      $statement->bindValue(':email', $email);
      $statement->bindValue(':password', $password);
      $statement->bindValue(':create_at', $date);
      $statement->bindValue(':update_at', $date);
      if ($statement->execute()) {
        header('location: login.php');
      }
    }
  }
  unset($pdo);
}
?>
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

              <form method="post" action="">
                <div class="form-group">
                  <input type="text" class="form-control <?php echo (!empty($first_name_error)) ? 'is-invalid' : ''; ?>" name="first_name" placeholder="First Name">
                  <samp class="invalid-feedback"><?php echo $first_name_error; ?></samp>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control <?php echo (!empty($last_name_error)) ? 'is-invalid' : ''; ?>" name="last_name" placeholder="Last Name">
                  <samp class="invalid-feedback"><?php echo $last_name_error; ?></samp>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control <?php echo (!empty($email_error)) ? 'is-invalid' : ''; ?>" name="email" placeholder="Email">
                  <samp class="invalid-feedback"><?php echo $email_error; ?></samp>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control <?php echo (!empty($password_error)) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password">
                  <samp class="invalid-feedback"><?php echo $password_error; ?></samp>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control <?php echo (!empty($confirmpassword_error)) ? 'is-invalid' : ''; ?>" name="confirmpassword" placeholder="Confirm Password">
                  <samp class="invalid-feedback"><?php echo $confirmpassword_error; ?></samp>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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