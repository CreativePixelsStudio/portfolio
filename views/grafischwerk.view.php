<?php include_once "header.php"; ?>

<div class="content-wrapper overflowX" onclick="hideHeader()">
    <div class="header__pagetitle">
		<a href="/">Home</a> &#x025B8; Grafisch werk
	</div>
    <section class="hero  container hero-websites flexbox section-wrapper">
        <div class="hero-content ">
            <h1>Grafisch werk</h1>
            <p>Zelfstandig grafisch ontwerper ben ik niet. Een grote interesse en passie in alles wat met creativiteit te maken heb ik wel.</p>
            <p>Al van toen ik 17 jaar was wist ik wat ik wou studeren: grafische vormgeving. Toch draaide het heel anders uit met het behalen van 2 bachelor diploma's als kleuterjuf en leerkracht lager onderwijs. Na een aantal jaren werken, durfde ik toch de stap te wagen om opnieuw achter de schoolbanken te kruipen. </p>
            <p>Developer zijn vind ik geweldig! Maar af en toe grafisch bezig zijn heb ik nodig.</p>
        </div>
        <div  class="hero-image parallax-right">
            <img src="./images/elisaminten-vierkant3.jpg" alt="Elisa Minten">
        </div>
        <div class="hero-websites-background-grafisch hero-websites-background parallax-zoom"></div>
    </section >
    <section class="section-wrapper project-wrapper masonry" >
       <div class="container project-inner  flexbox flexbox-space-between ">
            <?php foreach ($grafisch as $werk): ?>
                <article class="project-card <?php echo $werk['class']?>"> 
                    <img src="./images/<?php echo $werk['image']?> " alt="<?php echo $werk['alt']?>">                
                </article>
            <?php endforeach ?>
            <div id="modal" class="modal">
                <span id="modal-close" class="modal-close">&times;</span>
                <img id="modal-content" class="modal-content">
                <div id="modal-caption" class="modal-caption"></div>
            </div>
        </div>
    </section>
    <section class="more flexbox">
        <a href="creatief.php">
            <div class="col creative">
                <p>Creatieve skills</p>
            </div>
        </a>
        <a href="projecten.php">
            <div class="col projects">
                <p>Projecten</p>
            </div>
        </a>
    </section>
    <?php include_once 'footerx.php';?>
</div>

<?php include_once 'footer.php';?>