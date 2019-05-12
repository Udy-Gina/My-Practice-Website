<!DOCTYPE html>
<!--
This is Sam Green's profile page
-->
<html lang="en-us">
    <head>
        <title>Sam Green | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/head_salmon.php';?>
        <meta name="description" content="A site dedicated to providing recreation to outdoor enthusiasts along the Salmon River in central Idaho.">
    </head>
    <body>
        <div id="wrapper">
            <header class="header">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/header_salmon.php';?>
                <ul class="breadcrumbs">
                    <li>You are here: <a href="/salmon/index.php">Home</a></li>
                    <li><a href="/salmon/guides_salmon/guides.php">Guides Home</a></li>
                    <li><a href="/salmon/guides_salmon/guide_sam.php">Sam Green</a></li>
                </ul>
            </header>
            
            <section class="assessments">
                <h1>Get to know Sam...</h1> 
                    <article class="article">
                        <section class="entryguide">
                            <h2>Sam Green</h2>
                            <figure>
                                <img class="guidespic" src="/salmon/images_salmon/sam.jpg" alt="Picture of Sam Green">
                            </figure>
                            <p>Sam was born and raised in Maine: a place with limitless opportunities for outdoor recreation.  He spent most of his free time hunting, kayaking, and skiing, and his dad taught him to ice fish when he was twelve.  He pursued an education in wildlife management at The University of Maine.  After graduating, Sam took some time to travel, taking in our country's beautiful scenery, which included the Salmon River in central Idaho.  After experiencing the rapids for the first time, he decided to stay a while.  He spends his summers as a river guide, and lives in Maine the rest of the year.</p>
                            <p>sam.green@salmonriveradventures.com</p>
                        </section>
                    </article>
            </section>        
            
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/footer_salmon.php';?>
            </footer>
        </div>
    </body>
</html>
