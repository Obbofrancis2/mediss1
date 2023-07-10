<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="{{asset('css/pending.css')}}" rel="stylesheet" />
  <title>Document</title>
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
        <li class="nav-item" >
          <a class="nav-link" href="{{url('/index')}}" style="color: white;"><i class="fas fa-home" style="color: white;"></i> HOME</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="{{url('/update')}}" style="color: white;"><i class="fas fa-exclamation-circle" style="color: white;"></i> UPDATES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/emergency')}}" style="color: white;"><i class="fas fa-exclamation-triangle" style="color: white;"></i> EMERGENCY</a>
        </li>
        <li class="nav-item" style="background-color:rgba(109,196,156,1); border-radius: 10px;">
          <a class="nav-link" href="{{url('/pending')}}" style="color: white;"><i class="fas fa-clock" style="color: white;"></i> PENDING</a>
        </li>
        <li class="nav-item" style="background-color:rgb(178, 178, 178); border-radius: 10px; font-weight: bolder;">
          <a class="nav-link" href="{{url('/signin')}}" style="color: white;"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="container">
    <div class="row special">
         <div class="row head">PENDING APPOINTMENTS</div>
         <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Service Requested</th>
                <th>Hospital</th>
                <th>Patient</th>
                <th>Date</th>
                <th>Time</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>Child immunization</td>
                <td>Case Clinic</td>
                <td>Son</td>
                <td>29/06/2023</td>
                <td>10/07/2023</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Child immunization</td>
                <td>Case Clinic</td>
                <td>Mother</td>
                <td>29/06/2023</td>
                <td>10/07/2023</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Child immunization</td>
                <td>Case Clinic</td>
                <td>Wife</td>
                <td>29/06/2023</td>
                <td>10/07/2023</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Child immunization</td>
                <td>Case Clinic</td>
                <td>Daughter</td>
                <td>29/06/2023</td>
                <td>10/07/2023</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Child immunization</td>
                <td>Case Clinic</td>
                <td>Self</td>
                <td>29/06/2023</td>
                <td>10/07/2023</td>
              </tr>
              <tr>
                 <td>6</td>
                <td>Child immunization</td>
                <td>Case Clinic</td>
                <td>Father</td>
                <td>29/06/2023</td>
                <td>10/07/2023</td>
              </tr>
            </tbody>
          </table>
         </div>
    </div>
  </div>

  <!-- Include the Bootstrap JS files at the end of the body -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
