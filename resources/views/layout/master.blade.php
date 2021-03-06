<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 30px;
      border-radius: 0;
      z-index: 1 !important;
      
    }

    .np{
      padding-top: 13px
    }

    .logo{
      height:70px;
      width: 160px;
    }

    .sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
      margin-top: 40px;
      height: 200px;
    }

    .custom-login{
        height: 600px;
        padding-top: 150px;
    }

    .post-container{
      height: auto;

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
  margin-top: 0px;
  color: #222;
  
}

.post-name{
  margin-top: 20px;
  padding: 0px;
}
.float-child {
    
    float: left;
    padding-right: 5px;  
} 

.create-post-button{
  color: #fff !important;
}
.create-post-button:hover{
  color: gray !important;
}
.image-button{
  background-color: gray !important;
    border-color:gray !important;
    color: black;
    margin-top: 10px;
}

.image-button:hover{
  
    color: white;
    
}
.post-image{
  height: 120px;
  width: 200px;
}

.right-post-item{
  width: 40%;
  float: left;
  
}

.left-post-item{
  width: 60%;
  float: left;
}



.post-body{
  color: gray;
  font-style:italic; 
}

.details-image{
  height: 900px;
  width: 100%;
}

.details-box{
  margin-left: 100px;
    margin-right: 100px;
}

.line-spacing{
  line-height: 26pt;

}

.details-title{
  text-align: center;
}

.card{
  margin: 20px !important;
 
}

.user-posts-box{
  margin-top: 70px
}

a{
  text-decoration: none !important;
}
.tech-background{
  background-color: red;
  color: white;
  width: max-content;
  padding: 5px;
}

.politics-background{
  background-color:blue;
  color: white;
  width: max-content;
  padding: 5px;
}

.fashion-background{
  background-color:green;
  color: white;
  width: max-content;
  padding: 5px;
}
.sports-background{
  background-color:purple;
  color: white;
  width: max-content;
  padding: 5px;
}

.footer-box{
  margin-top: 50px
}
.create-posts-box{
  margin-top: 70px
}
.likes-count{
  margin-top: 3px
}

.jt{
  margin-top: 40px !important
}
.pc{
  display: inline-block;
  
}
.create-posts-title{
  margin-top: 100px
}
  </style>
</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')


</body>
</html>
