<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="{{asset('css/index.css')}}" rel="stylesheet" />
  <title>MEDISS</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('logo.png')}}" alt="Logo" class="logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item" style="background-color:rgba(109,196,156,1); border-radius: 10px;">
          <a class="nav-link" href="{{url('/index')}}" style="color: white;"><i class="fas fa-home" style="color: white;"></i> HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/update')}}" style="color: white;"><i class="fas fa-exclamation-circle" style="color: white;"></i> UPDATES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/emergency')}}" style="color: white;"><i class="fas fa-exclamation-triangle" style="color: white;"></i> EMERGENCY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/pending')}}" style="color: white;"><i class="fas fa-clock" style="color: white;"></i> PENDING</a>
        </li>
        <li class="nav-item" style="background-color:rgb(178, 178, 178); border-radius: 10px; font-weight: bolder;">
          <a class="nav-link" href="{{url('/signin')}}" style="color: white;"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="search-container">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search for service" aria-label="Search" aria-describedby="search-button">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button>
      </div>
    </div>
  </div>

  <div class="hospital-info">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <img src="bg.png" alt="Hospital Image" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h5 class="card-title">NAKASERO HOSPITAL</h5>
            <p class="card-text">CARDIOLOGY, CARDIOGRAPHIC SURGERY, CT SCAN</p>
            <p class="card-text">5KM AWAY</p>
            <button class="btn btn-primary">Book appointment</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="hospital-info">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="{{asset('bg.png')}}" alt="Hospital Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <h5 class="card-title">CASE CLINIC KAMPALA</h5>
              <p class="card-text">CARDIOLOGY, CARDIOGRAPHIC SURGERY, CT SCAN</p>
              <p class="card-text">5KM AWAY</p>
              <button class="btn btn-primary">Book appointment</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hospital-info">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="bg.png" alt="Hospital Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <h5 class="card-title">NAKASERO HOSPITAL</h5>
              <p class="card-text">CARDIOLOGY, CARDIOGRAPHIC SURGERY, CT SCAN</p>
              <p class="card-text">5KM AWAY</p>
              <button class="btn btn-primary">Book appointment</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Include the Bootstrap JS files at the end of the body -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
