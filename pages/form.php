<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <title>Document</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
  <!-- Nav bar section -->
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img src="../img/logo.png" alt=""></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../index.html">Home</a></li>
        <li><a href="form.php">Forum</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="../index.html">Home</a></li>
        <li><a href="form.php">Forum</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container" style="padding: 5% 0;">
      <div class="row">
          <div class="col l12">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                  <label for="disabled">Disabled</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  This is an inline input field:
                  <div class="input-field inline">
                    <input id="email_inline" type="email" class="validate">
                    <label for="email_inline">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
</body>
</html>