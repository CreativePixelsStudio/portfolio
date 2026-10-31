<?php include_once "header.php"; ?>
<?php  include_once 'includes/init.php'; ?>

	<div class="content-wrapper overflowX" onclick="hideHeader()">
		<div class="header__pagetitle">
			Home
		</div>
		<div class="content-inner">
			<section class="hero parallax-bg-top">
				<div class="section-wrapper container">
					<h1 class="parallax-bottom">
						<span>Elisa <br>Minten</span>
						<div id="circle">
						<svg version="1.1" x="0px" y="0px" viewBox="0 0 300 300" enable- xml:space="preserve">
							<defs>
								<path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
							</defs>
							<g>
								<text >
									<textPath xlink:href="#circlePath">Front-end developer • Graphic designer •   </textPath>
								</text>
							</g>
						</svg>
					</div>
					</h1>
					
				</div>
			</section>
			<section class="about">
				<div class="section-wrapper container">
					<div class="flexbox">
						<div>
						<h2>Hey!<br> Ik ben Elisa</h2>
						</div>			
						<div>
							<p>Hallo!</p>
							<p> Mijn naam is Elisa Minten, ik ben een front-end developer met een grote passie voor designen. Je kan me vinden in Lummen (Limburg) sinds 1992.</p>
							<p>Ik hou ervan om het verhaal van de klant te vertalen naar een website die het juiste doelpubliek aanspreekt. </p>
							<a href="overmij.php" class="regular-btn">Meer weten over mij</a>
						</div>
					</div>
					<div class=" about-image">
						<div class="about-image-1 parallax-zoom"></div>
						<div class="about-image-2 parallax-zoom-out"></div>
						<div class="about-image-3 parallax-zoom"></div>
					</div>
				</div>
			</section>
			<section class="work">
				<div class="section-wrapper container flexbox">
					<div >
						<h2>Projecten</h2>
						<p>Working on it!</p>
						<p>Nieuwe ideeën groeien in mijn hoofd, maar een aantal projecten kan je al bekijken.</p>
						<a href="projecten.php" class="regular-btn regular-btn-reverse">Projecten</a>
						<a href="grafischwerk.php" class="regular-btn regular-btn-reverse">Grafisch werk</a>
					</div>
					<div class="slide__content ">

						<div class="slider">
							<?php foreach ($websites as $website): ?>

							<div class="slide">
									<div class="slide__inner-card"> 
										<a href="project.php?id=<?php echo $website['id']?>">
											<div class="slide__inner-card-image" style="background-image: url(./images/<?php echo $website['image']?> ")></div>
										</a>
										<div class="slide__inner-card-content">
											<a href="project.php?id=<?php echo $website['id']?>">
												<h3><?php echo $website['title'] ?></h3>
											</a>
											<p><?php echo $website['category']?></p>
											<a href="project.php?id=<?php echo $website['id']?>" class="flexbox flex-end">Bekijk project <i class="fa-solid fa-arrow-right"></i></a>
											
										</div>
									</div>

							</div>			
							<?php endforeach ?>
						<div class="btns">
							<div class="slider__btn slider__btn--left">
								<svg class="chevron" width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.41 7.41L14 6L8 12L14 18L15.41 16.59L10.83 12L15.41 7.41Z" fill="black"></path>
								</svg>
							</div>
							<div class="slider__btn slider__btn--right">
								<svg class="chevron" width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10 6L8.59003 7.41L13.17 12L8.59003 16.59L10 18L16 12L10 6Z" fill="black"></path>
								</svg>
							</div>
						</div>
							
						</div>
					</div>
				</div>
			</section>
			<section class="skills">
				<div class="section-wrapper container">
					<div class="skills-text flexbox">
						<div>
							<h2>Creatieve<br>skills</h2>
						</div>			
						<div>
							<p>Vanwaar komt nu die passie voor websites ontwikkelen en designs maken?</p>
							<p>Van jongs af aan ben ik een creatieveling. Dit uitte zich voornamelijk in tekenen en schilderen. Naarmate ik ouder werd, probeerde ik gedetailleerder te tekenen.</p>
							<p>Tekenschool of lessen heb ik nooit gevolgd. Talent en YouTube zijn een goede leerschool geweest voor mij!</p>
							<a href="creatief.php" class="regular-btn">Bekijk mijn tekeningen</a>
						</div>
					</div>
				</div>
				<div class="skills-images flexbox">
					<div class="skills-images-1 skills-image"></div>
					<div class="skills-images-2 skills-image"></div>
					<div class="skills-images-3 skills-image"></div>
					<div class="skills-images-4 skills-image"></div>
				</div>
			</section>
			<!--<section class="cta">
				<div class="section-wrapper container">
					<div  class="flexbox">
						<div class="col">
							<h2>Babbeltje?<br><span>Ik ben altijd geïnteresseerd in...</span></h2>
							<p></p>
						</div>
						<div class="col">
							<a href="mailto:elisaminten@hotmail.com?subject=Hallo, ik heb een vraag over een website" class="regular-btn"><i class="fa-solid fa-code"></i>Front-end development</a>
							<a href="mailto:elisaminten@hotmail.com?subject=Hallo tekenaar, ik heb een vraag" class="regular-btn"><i class="fa-solid fa-pencil"></i>Tekenen</a>
							<a href="mailto:elisaminten@hotmail.com?subject=Hallo, kan ik wat meer werk van je zien?"class="regular-btn"><i class="fa-solid fa-desktop"></i>Design</a>
							<a href="mailto:elisaminten@hotmail.com?subject=Hmmm, ik ben gek op sushi!" class="regular-btn"><i class="fa-solid fa-fish"></i>Sushi</a>
							<a href="mailto:elisaminten@hotmail.com?subject=Hoi, ik gewoon een mailtje sturen" class="regular-btn"><i class="fa-solid fa-envelope"></i>Gewoon een babbeltje</a>
						</div>
				</div>
			</section>-->
			<?php include_once 'footerx.php';?>
		</div>
	</div>


<?php include_once 'footer.php';?>