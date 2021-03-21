<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Movie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">ContactUs</a>
          </li>
        <li>
          <a class="nav-link" href="about.php">AboutUs</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
    <div class="row">
    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>
    <div class="col col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <table class="table">
    
    <tr>
            <td>Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>

        <tr>
            <td>contact-No</td>
            <td><input type="text" class="form-control"></td>
        </tr>

        <tr>
            <td>Email-Id</td>
            <td><input type="email" class="form-control"></td>
        </tr>

        <tr>
            <td>Movie-name</td>
            <td><input type="text" class="form-control"></td>
        </tr>

        <tr>
            <td>Date</td>
            <td><input type="date" class="form-control"></td>
        </tr>

        <tr>
            <td>Number of seats</td>
            <td><input type="numeric" class="form-control"></td>
        </tr>

        <tr>
            <td></td>
            <td><button class="btn btn-outline-danger">BOOK</button></td>
        </tr>
    </table>
    </div>
    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>