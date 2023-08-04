<!DOCTYPE html>
<html>
<head>
  <title>Company Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{url('/')}}">Tecxpert Infotech LTD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">About</a>
          </li>
          
          <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('/erp')}}">Cloud based ERP Services</a></li>
                        <li><a class="dropdown-item" href="{{url('/database')}}">Database Administration Services</a></li>
                        <li><a class="dropdown-item" href="{{url('/application')}}">Customized application software</a></li>
                        <li><a class="dropdown-item" href="{{url('/it')}}">Managed IT Services</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                       Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#">CASE STUDIES</a></li> -->
                        <li><a class="dropdown-item" href="{{url('/blog')}}">BLOGS</a></li>
                    </ul>
                </li>


          <!-- <li class="nav-item">
            <a class="nav-link" href="">Verticals</a>
          </li> -->
          <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                       Methodology
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('/quality')}}">QUALITY</a></li>
                        <li><a class="dropdown-item" href="{{url('/methodology')}}">DEVELOPMENT METHODOLOGY</a></li>
                        <li><a class="dropdown-item" href="{{url('/project')}}">PROJECT MANAGEMENT</a></li>
                        <li><a class="dropdown-item" href="{{url('/security')}}">SECURITY POLICY</a></li>
                        <li><a class="dropdown-item" href="{{url('/capability')}}">CAPABILITIES</a></li>
                        
                    </ul>
                </li>


                <li class="nav-item">
            <a class="nav-link" href="{{url('/career')}}">Careers</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="{{url('/register')}}">Contact us</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Rest of your website content goes here -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
