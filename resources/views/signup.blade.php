<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link href="{{asset('css/signup.css')}}" rel="stylesheet" />
    <title>Document</title>
  </head>
  <body>
    <div>
    <?php
    if (isset($_POST['signup'])){
      $email       = $_POST['email'];
      $username    = $_POST['name'];
      $phone       = $_POST['contact'];
      $password    = $_POST['password'];
      
      $sql = "INSERT INTO registered_user (userid, username, email,password) VALUES (?,?,?,?)";
      $stmtinsert = $dbh->prepare($sql);
      $result = $stmtinsert->execute([$email, $username, $phone, $password]);
      if($result){
        // echo 'successfully saved';
      }else{
        echo 'There were errors while saving the data';
      }

    }
    ?>
    </div>
    <div class="container">
      <div class="logo"><img src="{{asset('logo.png')}}" alt=""></div>
      <form Action="signup.php" Method="POST" id="myForm">
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="Enter your email address" require />
        </div>
        <div class="form-group">
            <label for="email">User name</label>
            <input id="name" name="name" type="text" placeholder="Enter your full names" require />
          </div>
        <div class="form-group">
          <label for="contact">Phone</label>
          <input id="contact" name="contact" type="tel" placeholder="Enter your phone number" require />
        </div>
        <div class="form-group">
          <label for="password">Choose Password</label>
          <input id="password" name="password" type="password" placeholder="Enter new password" require />
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input id="confirm-password" name="confirm-password" type="password" placeholder="Confirm password" require />
        </div>
        <div class="form-group">
          <input type="submit" value="Sign Up" name="signup" class="btn-primary" id="basicAlert"/>          
          <button class="btn-primary" ><a href="{{url('/signin')}}">Already Registered</a></button>
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <script>
    document.querySelector('#myForm').addEventListener('submit', (event) => {
      event.preventDefault(); // Prevent form submission

      // Simulate form submission delay (you can replace this with your actual form submission logic)
      setTimeout(() => {
        Swal.fire({
          title: 'Success!',
          text: 'Form submitted successfully.',
          icon: 'success',
          toast: true,
          position: 'top-center',
          showConfirmButton: false,
          timer: 4000 // Duration of the toast message in milliseconds (3 seconds in this case)
        });
      }, 1000); // Simulating 1-second form submission delay (replace this with actual submission logic delay)
    });
  </script>
  </body>
</html>
