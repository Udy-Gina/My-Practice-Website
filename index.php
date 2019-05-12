<!DOCTYPE html>
<!--
This is the site home page
-->
<html lang="en-us">
    <head>
        <title>Home | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/head_salmon.php';?>
        <meta name="description" content="A site dedicated to providing recreation to outdoor enthusiasts along the Salmon River in central Idaho.">
    </head>
    <body>
        <div id="wrapper">
            <header class="header">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/header_salmon.php';?>
                <ul class="breadcrumbs">
                    <li>You are here: <a href="/salmon/index.php">Home</a></li>
                </ul>
            </header>
            
            <section id="slogan">
                <p><em>...the river of no return!</em></p>
            </section>
            
            <article class="riverblurb">
                <p><span><em>The Salmon River </em></span>is one of the premier rivers in the world, known for its sandy beaches, hot springs, warm water for swimming, and its rapids.  Both beginner and advanced river enthusiasts will find plenty to keep them entertained.  Additionally, the Salmon River is home to abundant wildlife, including many types of fish.  You are sure to love this beautiful river and all it has to offer.</p>
            </article>
            
            <section class="maincontent">
                <!-- The gallery appears below and should rotate every 5 seconds (except when the mouse hovers over the image) when the JavaScript has been implemented. -->
                <figure>
                    <img src="/salmon/images_salmon/river_rapids_kayaker.jpg" id="carousel" alt="Kayaker navagating rapids">
                </figure>
            </section>
            
            <section class="mediamaincontent">
                <figure>
                    <img src="/salmon/images_salmon/river_rapids_kayaker.jpg" id="mediacarousel" alt="Kayaker navagating rapids">
                </figure>
            </section>
            
            <article class="mediariverblurb">
                <p><span><em>The Salmon River </em></span>is one of the premier rivers in the world, known for its sandy beaches, hot springs, warm water for swimming, and its rapids.  Both beginner and advanced river enthusiasts will find plenty to keep them entertained.  Additionally, the Salmon River is home to abundant wildlife, including many types of fish.  You are sure to love this beautiful river and all it has to offer.</p>
            </article>
            
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/footer_salmon.php';?>
            </footer>
        </div>
    </body>
</html>
