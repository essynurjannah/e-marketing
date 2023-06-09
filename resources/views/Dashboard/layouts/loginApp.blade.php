<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="plugin/vendor/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="plugin/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="plugin/css/custom.css">
    <link rel="shortcut icon" href="plugin/img/favicon.ico">
  </head>
  <body>
    
   
      
   @yield('content')
       
    

    <script src="plugin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugin/vendor/chart.js/Chart.min.js"></script>
    <script src="plugin/vendor/just-validate/js/just-validate.min.js"></script>
    <script src="plugin/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="plugin/js/charts-home.js"></script>
    <script src="plugin/js/front.js"></script>
    <script>
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>