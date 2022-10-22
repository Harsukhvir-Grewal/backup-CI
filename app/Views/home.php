<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wedding Planner</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- STYLES -->

    <style {csp-style-nonce}>
        .bg{
    background-image: url("https://wallpaperaccess.com/full/2149538.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
.bgnav{
    background: rgb(255, 171, 171);
}
.modalbg{
    background: linear-gradient(to bottom right, rgb(255, 144, 144), rgb(255, 255, 255));
}
.ab{
    margin-top: 200px;
}
.navtext{
    text-decoration: underline;
    font-weight: bold;
    </style>
</head>
<body class="bg">
  <nav class="navbar navbar-expand-sm navbar-light bgnav">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item active">
                <a class="nav-link active navtext" href="project.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="features.html">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item me-4">
          <button type="button  "  class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#signin">LOG IN</button>
        </li>
        <li class="nav-item me-4">
          <button type="button " class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#signup">REGISTER</button>
        </li>
        </ul>

    </div>
</nav>
<div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modalbg">
      <div class="modal-header text-center">
      <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">SIGN IN </h5>
        
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="col-form-label">Enter Your Username/Email:</label>
            <input type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Enter Your Password:</label>
            <input type="password" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn w-100 ">LOG IN</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modalbg">
      <div class="modal-header text-center">
      <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">SIGN UP</h5>
        
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="col-form-label">Enter Your Username/Email:</label>
            <input type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Enter Your Password:</label>
            <input type="password" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Confirm Password:</label>
            <input type="password" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn w-100 ">REGISTER</button>
      </div>
    </div>
  </div>
</div>
<div class="container ab">
  <div class="row">
    <div class="col-sm-5">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  <div>
    <a href="features.html">
    <button type="button" class="btn">Get Started!</button>
    </a>
  </div>
</body>
</html>
