<?php 
$title = "Úvod";
include "header.php";

?>

<body>
    <?php 
        
        include "nav.php";
    ?>
    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Clean Blog</h1><span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">
                <div class="post-preview"><a href="#">
                        <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                        <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#">Start Bootstrap on September 24, 2018</a></p>
                </div>
                <hr>
                <div class="post-preview"><a href="#">
                        <h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#">Start Bootstrap on September 18, 2018</a></p>
                </div>
                <hr>
                <div class="post-preview"><a href="#">
                        <h2 class="post-title"> Science has not yet mastered prophecy</h2>
                        <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#">Start Bootstrap on August 24, 2018</a></p>
                </div>
                <hr>
                <div class="post-preview"><a href="#">
                        <h2 class="post-title">Failure is not an option</h2>
                        <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
                    </a>
                    <p class="post-meta">Posted by&nbsp;<a href="#">Start Bootstrap on July 8, 2018</a></p>
                </div>
                <hr>
                <div class="clearfix"><button class="btn btn-primary float-end" type="button">Older Posts&nbsp;⇒</button></div>
            </div>
        </div>
    </div>

    <?php include "footer.php"?>

    
</body>

</html>