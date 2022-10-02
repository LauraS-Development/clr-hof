<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Clubradio Hof</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body class="landing is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="">
        <h1><a href="/">Clubradio Hof</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="?sendeplan">Sendeplan</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <?php
        if (isset($_GET["sendeplan"])) {
            include_once "./sendeplan.html";
        } elseif (isset($_GET["impressum"])) {
            include_once "./impressum.html";
        } elseif (isset($_GET["datenschutz"])) {
            include_once "./datenschutz.html";
        } else 
            include_once "./index.html";
        
    ?>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <a href="?impressum">Impressum</a>&nbsp; <a href="?datenschutz">Datenschutz</a>
        <ul class="copyright">
            <li>&copy; Clubradio Hof</li>
            <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>