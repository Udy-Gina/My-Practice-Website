<!DOCTYPE html>
<!--
This is the Adventures Home page
-->
<html lang="en-us">
    <head>
        <title>Adventures Home | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/head_salmon.php';?>
        <meta name="description" content="A site dedicated to providing recreation to outdoor enthusiasts along the Salmon River in central Idaho.">
    </head>
    <body>
        <div id="wrapper">
            <header class="header">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/header_salmon.php';?>
                <ul class="breadcrumbs">
                    <li>You are here: <a href="/salmon/index.php">Home</a></li>
                    <li><a href="/salmon/adventures_salmon/adventures.php">Adventures Home</a></li>
                </ul>
            </header>
            
            <section class="adventuresmain">
                <h1>The River Awaits!</h1> 
                    <nav class="adventures">
                        <a href="/salmon/adventures_salmon/level1.php" title="Link to Level I Rafting Trip page">
                        <section class="entryadventures">
                            <h2>Level I Rafting Trip (1 Day)</h2>
                            <figure>
                                <img class="adventurespic" src="/salmon/images_salmon/river_kayakers_smooth.jpg" alt="Picture of kayakers">
                            </figure>
                            <p>Enjoy a 13-mile day trip down the scenic Salmon River.</p>
                        </section>
                        </a>
                    </nav>
                    <nav class="adventures">
                        <a href="/salmon/adventures_salmon/level2.php" title="Link to Level II Rafting Trip page">
                        <section class="entryadventures">
                            <h2>Level II Rafting Trip (3 Days)</h2>
                            <figure>
                                <img class="adventurespic" src="/salmon/images_salmon/river_rapids_rafts.jpg" alt="Picture of rafting rapids">
                            </figure>
                            <p>Nearly 50 miles of pristine water awaits you on our three-day trip.</p>
                        </section>
                        </a>
                    </nav>
                    <nav class="adventures">
                        <a href="/salmon/adventures_salmon/level3.php" title="Link to Level III Rafting Trip page">
                        <section class="entryadventures">
                            <h2>Level III Rafting Trip (6 Days)</h2>
                            <figure>
                                <img class="adventurespic" src="/salmon/images_salmon/river_rafters.jpg" alt="Picture of rafting rapids">
                            </figure>
                            <p>Class III and IV rapids will help create memories you'll never forget!</p>
                        </section>
                        </a>
                    </nav>
            </section>        
            
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/footer_salmon.php';?>
            </footer>
        </div>
    </body>
</html>
