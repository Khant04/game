<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="#home"> <img src="/images/logo.png" width="70px" height="70px" alt="Lynx Auctions"> </a>          
            <a href="#news" class="active">Home</a>
            <a href="#news">About Us</a>
            <a href="#contact">Auctions</a>
            <a href="#about">Join Us</a>
            <a href="#about">Contact Us</a>
            
            <br>

            <div class="col-md-5 headtext">
                <font color="black" class="headerquote" face="MV Boli"> 
                    "Mobilize Your Auctions, <br> Bid Many The Same Time"
                </font>
            </div> 

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>
