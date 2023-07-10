<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
    <link href="{{asset('css/signin.css')}}" rel="stylesheet" />
    <title>SIGNIN</title>
  </head>
  <body>
    <div>
    
    </div>
    <div class="container">
      <div class="logo"><img src="{{asset('logo.png')}}" alt=""></div>
      <form Action="signin.php" Method="POST">
        <div class="form-group">
          <label for="name">User Name</label>
          <input id="name" name="name" type="text" placeholder="Enter your username" require />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Enter your full Email" require />
          </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="Enter password" require />
        </div>
        
        <div class="form-group">
          <input type="submit" value="Signin" class="btn-primary" style="background-color:rgba(32, 137, 132, 1); color: white; font-weight:bolder; border: 1px solid rgba(109,196,156,1); width:80px; height:40px; border-radius:15px;" /> 
          <button href="{{url('/signup')}}" style="background-color:rgba(32, 137, 132, 1); color: white; font-weight:bolder; border: 1px solid rgba(109,196,156,1); width:100px; height:40px; border-radius:15px;">Register</button>
          <input type="submit" value="Signin With Google" class="btn-primary" name="signin" style="background-color:rgba(32, 137, 132, 1); color: white; font-weight:bolder; border: 1px solid rgba(109,196,156,1);width:180px; height:40px; border-radius:15px; "/>
        </div>
      </form>
      <button href="{{url('/signup')}}" style="background-color:rgba(32, 137, 132, 1); color: white; font-weight:bolder; border: 1px solid rgba(109,196,156,1); width:100px; height:40px; border-radius:15px;">Register</button>
    </div>
  </body>
</html>
