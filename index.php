<?php

$title = "Home Page";
?>


<?php require('header.php'); ?>
		<section class="home_hero">
			<article class="hero_article">
				<h3 class="hero_article-headTop">domingo</h3>
				<h3 class="hero_article-headBot">dunlap</h3>	
				<p>An accomplished coder and programmer, digital nomad, and creator of complex and amazing things both physically and virtually. With knowledge of various programming languages and techniques, I have the ability to make any website design you can think of a reality. Any design in the universe. My skills include:</p>
				<em class="hero_skills-list">
					<ul>
						<li>scss</li>
						<li>jquery</li>
						<li>gsap</li>
						<li>git</li>
						<li>oop</li>
					</ul>
					<ul>
						<li>html</li>
						<li>css</li>
						<li>javascript</li>
					</ul>
					<ul>
						<li>c++</li>
						<li>python</li>
						<li>sql</li>
						<li>seo</li>
						<li>a11y</li>
					</ul>
				</em>
				<p>But that isn't the end of my skills and abilities!</p>
				<a href="contactme.php" class="hero_article-cta">
					<div class="cta_planet"></div>
					<div class="cta_bar">let's collab</div>
				</a>
			</article>
			<figure class="hero_image hide-small">
				<img src="dist/img/herodevimg.png" alt="The Dread Dev himself">
			</figure>
			<video id="videoBG" poster="dist/img/herobkgd.gif" autoplay muted loop>
				<source src="dist/vid/Nebula-25168.mp4" type="video/mp4">
			</video>
			<div class="video_foreground"></div>
		</section>

		<main class="home_main">
			<h3 class="home_main-header">where the passion lives</h3>
			<ul>
				<div class="projectLink" id="left">
					<figure class="projectImg">
						<img src="dist/img/mand.png" alt="mandalorion image">
					</figure>
					<div class="projectDesc hidden">
						<h4>mandalorion <br> poster</h4>
						<p>My animated poster for the hit tv series The Mandalorian. This was a fun project involving PS, GSAP, and many other web animation techniques.  </p>
						<a target="_blank" href="http://circuslabs.net/~domingo.dunlap/quarter4/webnimation/wa-poster/" class="projectAnchor">view more details</a>
					</div>
				</div>
				<div class="projectLink" id="right">
					<div class="projectDesc hidden">
						<h4>glazed mock site</h4>
						<p>This is a mock site for my mothers doughnut shop. It was by far one of the best websites I've ever made.</p>
						<a target="_blank" href="http://circuslabs.net/~domingo.dunlap/glazedMockSite/" class="projectAnchor">view more details</a>
					</div>
					<figure class="projectImg">
						<img src="dist/img/glazed.png" alt="Glazed Donuts image">
					</figure>
				</div>
				<div class="projectLink" id="left">
					<figure class="projectImg">
						<img src="dist/img/spotstats.png" alt="Spotify Logo">
					</figure>
					<div class="projectDesc hidden sss">
						<h4>spotify stats site</h4>
						<p>This was a collabrative effort between me and a couple classmates. Using handlebars, SVG's, and the spotify stats API.</p>
						<a href="" target="_blank" class="projectAnchor">view more details</a>
					</div>
				</div>
				<div class="projectLink" id="right">
					<div class="projectDesc hidden">
						<h4>planetarium site</h4>
						<p>This was one of my favorite web animation projects, a simple Solar Sytem Map. Each planet rotates at the same speed it does in real life.</p>
						<a target="_blank" href="http://circuslabs.net/~domingo.dunlap/quarter4/webnimation/webAnime2/" class="projectAnchor">view more details</a>
					</div>
					<figure class="projectImg">
						<img src="dist/img/planetarium.png" alt="planetarium image" class="planetariumImg">
					</figure>
				</div>
			</ul>
		</main>
		<?php require('footer.php'); ?>
		
