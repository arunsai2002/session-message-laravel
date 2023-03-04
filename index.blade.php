<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
  <body>
   

    @if(session('email'))
    <h3>{{session('email')}}user added</h3>
    @endif

    <form action="login" method="post">
        @csrf
        <div class="form-group">
          email:
          <input type="email" name="email" id="email">
          <span>@error ('email') {{$message}} @enderror</span>
          
        </div>
        <div class="form-group">
          password:
          <input type="password" name="password" id="password">
          <span> @error ('password') {{$message}} @enderror</span>
         
        </div>
        
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
      </form>
      


      


     
   </body>
</html>
