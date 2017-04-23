
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg/png" href="images/icon.jpg">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
{{Html::style('css/styles.css')}}

 @yield('stylesheets')

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Blog @yield('title')</title>
     <style type="text/css">
         .navbar-brand > img {
            height: 300%;
            margin-top: -25px;
         }
         body{
            background-color: #31708f;
         }
         .navbar-inverse{
             background-color: #31708f;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
             border-radius: 0;
         }
         .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
            background-color: white;
            color: black;

         }
         h3,h2{
            color: white;
         }
         .lead{
            text-align: justify;
            text-justify:inter-word;
         }
     </style>
    <!-- Bootstrap -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
