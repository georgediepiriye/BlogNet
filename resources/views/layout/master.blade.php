<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .custom-login{
        height: 600px;
        padding-top: 100px;
    }

    .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #1f1e1c !important;
    border-color: #1f1e1c !important;
}
.error-message h5{
    color: red;
    
}


  </style>
</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')


</body>
</html>
