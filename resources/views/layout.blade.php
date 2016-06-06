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
    <header id="siteheader" class="dark">
        <nav id="topnav" style="">
            <div class="dropnav" id="dropnav">
                <div class="dropnavIcon" id="dropnavIcon"></div> 
                </div>
                <div class="dropnavMenu" id="dropnavMenu">
                  <ul>
                    <li><a href="/about">about</a></li>
                    <li><a href="/">work</a></li>
                  </ul> 
                </div>
            <div class="headerLogo"><img href="/images/app-logo.svg"></div>
            
            <div class="menu1-1"><a id="menu1-1-A" href="/">
                <h2 id="menu1-1-text">apparent</h2></a></div>
                
            <div class="menu1-2"><a id="menu1-2-A" href="/">
                <h2 id="menu1-2-text">about</h2></a></div>

            <div class="menu1-3"><a id="menu1-3-A" href="/">
                <h2 id="menu1-3-text">work</h2></a></div>
        </nav>
    </header>

@yield('main')

@yield('bottom')
   
@yield('footer')
        <script src="/shared/jquery-2.2.4.js"></script>
        <script src="/shared/javascript.js"></script> 
    </body>
</html>