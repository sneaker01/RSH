<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- importing google font into the page-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- linking bootstrap stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- linking the local stylesheet file -->
    <link rel="stylesheet" href="http://localhost/RHD/styles/style.css" />
    <!-- Title -->
    <title>Ruwwad Service Hub</title>
    <!-- inline style rules -->
    <style>
      body {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.75),
            rgba(0, 0, 0, 0.75)
          ),
          url(images/cover.jpeg);
        background-size: cover;
        background-position: center;
      }
    </style>
  </head>
  <body>
    <!-- Content -->
    <div class="content">
      <!-- Title, Slogan, Sign in form and button -->
      <h1>RUWWAD SERVICE HUB</h1>
      <p>
        Whether you're facing hardware issues, software glitches, or just need
        some general tech advice,<br />
        our team is here to help. With our one-stop destination for IT support,
        you can rest assured that <br />
        your technology problems will be solved in a timely and professional
        manner
      </p>
      <div class="d-flex justify-content-center">
        <!-- the login form -->
        <script language="PHP">
          if (isset($_GET["error"])) {
            <p> echo $_GET['error'];</p>;
          }
          endif;
          $var = 12;
        </script>
        <script>
          function validateLoginForm() {
            // Get the email and password fields
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            // Check if any field is empty
            if (email == "" || password == "") {
              // Show a popup window with an error message
              alert("Please fill in all fields.");
              return false; // Prevent form submission
            }

            return true; // Allow form submission
          }
        </script>
        <form
          class="login-form"
          onsubmit="return validateLoginForm()"
          action="http://localhost/RHD/php/login.php"
          method="POST"
        >
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              class="form-control mx-auto"
              id="email"
              name="username"
              aria-describedby="emailHelp"
              placeholder="enter your email"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label mx-auto"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              name="pass"
              placeholder="enter your password"
              id="password"
            />
          </div>
          <button type="submit"><span></span>Sign In</button>
        </form>
      </div>
      <?php
      $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      
      if(strpos($fullurl, 'error=IncorrectEmailorpassword') == true){
        echo '<p>incorrect email or password!</p>';
        exit();
      }
      ?>
    </div>
    <!-- linking bootstrap Javasript script file -->
    <script src="http://localhost/RHD/script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
