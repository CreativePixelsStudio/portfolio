<?php include_once "header.php"; ?>

<div  class="content-wrapper overflowX white-background negmar" onclick="hideHeader()">
    <div class="header__pagetitle">
		<a href="/">Home</a> &#x025B8; Creatieve skills
	</div>
    <section class="hero  container hero-creatief flexbox section-wrapper">
        <div class="hero-content ">
            <h1>Creatieve skills</h1>
            <p>Dit is mijn talent dat ik van mama heb meegekregen.</p>
            <p>Van jongs af aan heb ik een passie voor alles wat met creativiteit te maken heeft. Naarmate ik ouder werd, probeerde ik meer gedetailleerd te tekenen. Tekenschool heb ik nooit gevolgd, maar het talent heb ik verder ontwikkeld.</p>
        </div>
    </section >
    <section class="section-wrapper  masonry" >
       <div class="container project-inner creatief-inner  flexbox flexbox-space-between ">
            <?php foreach ($tekeningen as $tekening):  ?>
                
                <article class="project-card <?php echo $tekening['class']?>"> 
                    <img src="./images/<?php echo $tekening['image']?>" alt="<?php echo $tekening['alt']?>" >
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
        <a href="grafischwerk.php">
            <div class="col graphic">
                <p>Grafisch ontwerp</p>
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