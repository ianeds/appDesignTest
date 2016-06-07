<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Apparent Design Marketing graphic interactive design">
        <meta name="keywords" content="graphic design,web,interactive">
        <meta name="author" content="Apparent Design">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Apparent | Graphic and interactive design studio</title>
        <link rel="stylesheet" href="/css/normalize.css" type="text/css">
        <link rel="stylesheet" href="/css/app.css" type="text/css">
    </head>
<body>
<?php include_once("analyticstracking.php") ?>
<header id="siteheader" class="">
    
    <div class="topRow-4"> 
        <div class="dropnav" id="dropnav">
                <div class="dropnavIcon" id="dropnavIcon"></div> 
                </div>
            
            <div class="headerLogo">
            <div id="logo">
                <h2 id=""><a id="" href="/">apparent</a></h2></div></div>
                
        </div>
    <div class="topRow-8"> 
        <div class="" id="dropnavMenu">
                  <ul>
                    <li class="mobile"><a href="/about">about</a></li>
                    <li class="mobile"><a href="/">work</a></li>
                  </ul> 
        </div>
</header>

@yield('main')

@yield('bottom')
   
@yield('footer')
        <script src="/shared/jquery-2.2.4.js"></script>
        <script src="/shared/javascript.js"></script> 
    </body>
</html>