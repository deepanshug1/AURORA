<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Aurora</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We here at AURORA value ART</h1>
                       <p>The beauty of an ART is in the artist's eyes</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/oil_cover.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Oil Paintings</p>
                                        <p>"Painting is the silence of thought and the music of sight."</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/Van_gogh.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Authentic Paintings</p>
                                    <p>“If we could say it in words there would be no reason to paint.”</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/Roy.jpeg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Sculptures</p>
                                   <p>“If we could say things with color and shapes that I couldn't say any other way.”</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
            <footer class="footer"> 
           <div id="sure">
           <div class="container">
            <h2>Contact us:</h2>
           <form action="https://formsubmit.co/jaindeepanshu2003@gmail.com" method="POST" id="contact">
        
            <input type="text" name="name" id="name" placeholder="Enter your Name" >
            <input type="number" name="contact_number" id="number" placeholder="Enter your Contact Number" >
            <input type="email" name="mail" id="mail" placeholder="Enter your email">
            <button type="submit" id="btn"> Submit </button>
            <br><br>
            </form>
               
               <center> 
               </center>
               </div>
            
           </div>
           </footer>
        </div>
    </body>
</html>