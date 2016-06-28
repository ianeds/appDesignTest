<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="graphic design branding interactive web print">
        <script src="https://use.typekit.net/iet7irr.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <meta name="keywords" content="graphic design,web,branding">
        <meta name="author" content="Lamp Bureau">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lamp Bureau | Graphic design studio</title>
        <link rel="stylesheet" href="/css/normalize.css" type="text/css">
        <link rel="stylesheet" href="/css/app.css" type="text/css">
        <meta property="og:title" content="Lamp Bureau" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://lampbureau.com" />
        <meta property="og:image" content="http://lampbureau.com/images/xxx.png" />
        <meta name="p:domain_verify" content="a6f2514211f5379965a9573e5d03419e"/>
    </head>
<body>
<?php include_once("analyticstracking.php") ?>

<!-- start header -->
<header id="siteheader" class="">
    <div id="top-bar">
        <div class="container">
            <div class="row">

<!-- nav menu button -->

                <div class="topRow-4"> 
                    <div class="dropnav" id="dropnav">
                            <div class="dropnavIcon" id="dropnavIcon">    
                            </div> 
                    </div>

            <!-- header wordmark -->
                    <div class="headerLogo">
                        <div id="logo">
                            <a href="/"><img src="/images/lamp_logo.svg" alt="Lamp logo" class="h2Logo"></a>
                        </div>
                    </div>
                </div>

                <div class="topRow-8"> 

        <!-- hideable dropdown menu  -->
                    <div class="" id="dropnavMenu">
                              <ul>
                                <li class="mobile"><a href="/about">about</a></li>
                                <li class="mobile"><a href="/">work</a></li>
                              </ul> 
                    </div> <!-- #dropnavMenu --> 
                </div> <!-- topRow-8 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #top-bar -->
</header>

<!-- end header -->

@yield('main')

@yield('bottom')
   
@yield('footer')
        <script src="/shared/jquery-2.2.4.js"></script>
        <script src="/shared/javascript.js"></script> 
    </body>
</html>