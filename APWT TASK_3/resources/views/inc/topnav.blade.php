<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <!-- <a class="navbar-brand" href="#">LabTask2</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <div class="navbar-nav ">
        <a class="nav-item nav-link " href="{{route('home')}}"><b>Home</b></a>
        <a class="nav-item nav-link " href="{{route('product')}}"><b>Product</b></a>
        <a class="nav-item nav-link " href="{{route('profile')}}"><b>Our teams</b></a>
        <a class="nav-item nav-link " href="{{route('aboutus')}}"><b>About us</b></a> 
        <a class="nav-item nav-link " href="{{route('studentList')}}"><b>Student List</b></a>
        <a class="nav-item nav-link " href="{{route('studentCreate')}}"><b>Create Student</b></a>
    </div>
    

    <div class="navbar-nav m-auto">
        <a class="nav-item nav-link " href="{{route('login')}}"><b>Login</b></a>
        <a class="nav-item nav-link " href="{{route('registration')}}"><b>Registration</b></a> 
        <a class="nav-item nav-link " href="{{route('contact')}}"><b>Contact</b></a>
    </div>
  </div>
</nav>

