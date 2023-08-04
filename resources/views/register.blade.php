@include('layouts.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>{{$title}}</h2>
    <form class="mx-1 mx-md-4" method="POST" action="{{$url}}">
                  @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name', $records->name ?? '' )}}">
       <span class="text-danger">
       @error('name')
{{$message}}
        @enderror
       </span>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{old('email', $records->email ?? '' )}}">
        <span class="text-danger">
       @error('email')
{{$message}}
        @enderror
       </span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control"name="password" placeholder="Enter your password" value="{{old('password' , $records->password ?? '' )}}">
        <span class="text-danger">
       @error('password')
{{$message}}
        @enderror
       </span>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm your password">
        <span class="text-danger">
       @error('confirmPassword')
{{$message}}
        @enderror
       </span>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>




</body>
</html>

@include('layouts.footer')