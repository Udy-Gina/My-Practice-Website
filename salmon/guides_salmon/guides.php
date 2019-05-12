<!DOCTYPE html>
<!--
This is the Guides Home page
-->
<html lang="en-us">
    <head>
        <title>Guides Home | Salmon River Adventures</title>
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
                </ul>
            </header>
            
            <section class="guidesmain">
                <h1>Meet our guides...</h1> 
                    <nav class="guides">
                        <a href="/salmon/guides_salmon/guide_jason.php" title="Link to Jason Roberts' profile page">
                        <section class="entryguides">
                            <h2>Jason Roberts</h2>
                            <figure>
                                <img class="guidespic" src="/salmon/images_salmon/jason.jpg" alt="Picture of Jason Roberts">
                            </figure>
                            <p>Jason is a certified commercial guide, and is the newest member of our team.  He has more than ten years' experience in rafting, including one year with Salmon River Adventures.</p>
                        </section>
                        </a>
                    </nav>
                    <nav class="guides">
                        <a href="/salmon/guides_salmon/guide_jill.php" title="Link to Jill Flanagan's profile page">
                        <section class="entryguides">
                            <h2>Jill Flanagan</h2>
                            <figure>
                                <img class="guidespic" src="/salmon/images_salmon/jill.jpg" alt="Picture of Jill Flanagan">
                            </figure>
                            <p>Jill has been a certified commercial guide for five years, but has a lifetime of experience on the Salmon River.  She can handle anything the river throws her way....</p>
                        </section>
                        </a>
                    </nav>
                    <nav class="guides">
                        <a href="/salmon/guides_salmon/guide_sam.php" title="Link to Sam Green's profile page">
                        <section class="entryguides">
                            <h2>Sam Green</h2>
                            <figure>
                                <img class="guidespic" src="/salmon/images_salmon/sam.jpg" alt="Picture of Sam Green">
                            </figure>
                            <p>Sam is a certified commercial guide.  He has seven years' experience on the Salmon River and can navigate the roughest rapids with ease.</p>
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
