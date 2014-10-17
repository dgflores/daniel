<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title> Menu</title>
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/cycle.js"></script>
    </head>
    <body>
       <div class="container">

            <ul id="nav">
                <li><a href="">Home</a></li>
                <li><a class="hsubs" href="#">Menu 1</a>
                    <ul class="subs">
                        <li><a href="#">Submenu 1</a></li>
                        <li><a href="#">Submenu 2</a></li>
                        <li><a href="#">Submenu 3</a></li>
                        <li><a href="#">Submenu 4</a></li>
                        <li><a href="#">Submenu 5</a></li>
                    </ul>
                </li>
                <li><a class="hsubs" href="#">Menu 2</a>
                    <ul class="subs">
                        <li><a href="#">Submenu 2-1</a></li>
                        <li><a href="#">Submenu 2-2</a></li>
                        <li><a href="#">Submenu 2-3</a></li>
                        <li><a href="#">Submenu 2-4</a></li>
                        <li><a href="#">Submenu 2-5</a></li>
                        <li><a href="#">Submenu 2-6</a></li>
                        <li><a href="#">Submenu 2-7</a></li>
                        <li><a href="#">Submenu 2-8</a></li>
                    </ul>
                </li>
                <li><a class="hsubs" href="#">Menu 3</a>
                    <ul class="subs">
                        <li><a href="#">Submenu 3-1</a></li>
                        <li><a href="#">Submenu 3-2</a></li>
                        <li><a href="#">Submenu 3-3</a></li>
                        <li><a href="#">Submenu 3-4</a></li>
                        <li><a href="#">Submenu 3-5</a></li>
                    </ul>
                </li>
                <li><a href="#">Menu 4</a></li>
                <li><a href="#">Menu 5</a></li>
                <li><a href="#">Menu 6</a></li>
                <li><a href="">Back</a></li>
                <li><a href="">hola</a></li>
                <div id="lavalamp"></div>
            </ul>
            <div id="cuerpo">
             <div class ="slideshow1">
             <img src="imagenes/lucas.jpg" width="670" height="400">
            <img src="imagenes/lucas2.jpg" width="670" height="400">
           <img src="imagenes/lucas3.jpg" width="670" height="400">
            </div>
            </div>
</div>

        </div>
        <script type="text/javascript">
$(document).ready(function() {
      
  $('.slideshow1').cycle({
    fx: 'shuffle' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
  });
  
  
  
});
</script>
    </body>
</html>
