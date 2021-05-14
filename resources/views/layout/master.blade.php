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

    .post-container{
      height: auto;
        padding-top: 50px;
    }

    .btn-primary, .btn-primary:active, .btn-primary:visited {
    background-color: #222 !important;
    border-color: #222 !important;
    color: grey;
}
.btn-primary:hover{
    color: #fff;
}
.error-message{
    color: red;
    
}
.post-box{
  height:100px !important;
}

.logout-button{
    margin-top: 5px;
    background-color: #222;
    border-color: #222 ;
    color: grey;
    font-size: 16px;

}
.logout-button:hover{
    border-color: #222;
    background-color: #222;
    color: #fff;
}

.post-button{
  margin-top: 10px;
}
.post-title{
  margin: 0px;
  padding: 0px;
  
}

.post-name{
  margin-top: 20px;
  padding: 0px;
}
.float-child {
    
    float: left;
    padding-right: 5px;
    
   
} 





  </style>
</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')


</body>
</html>
