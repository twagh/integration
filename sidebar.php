<div id="sidebar">
	<div class="inner">
		<!-- Search -->
		<!-- <section id="search" class="alt">
			<form method="post" action="#">
				<input type="text" name="query" id="query" placeholder="Search" />
			</form>
		</section> -->
		<!-- Menu -->
		<nav id="menu">
			<header class="major">
				<h2>Integration Tutorial</h2>
			</header>
			<!-- <section id="quote">
				<h4>Albert Einstein</h4>
				<blockquote>Education is what remains after one has forgotten what one has learned in school.</blockquote>
			</section> -->
			<ul>
				<li class="<?= $page=='home' ? 'active' : ''; ?>"><a href="/">Home</a></li>
				<li class="<?= $page=='features' ? 'active' : ''; ?>"><a href="/features">Features</a></li>
				<li>
					<span class="opener <?= in_array($page, ['engineering', 'medical', 'foundation']) ? 'active' : ''; ?>">Courses</span>
					<ul>
						<li class="<?= $page=='engineering' ? 'active' : ''; ?>"><a href="/engineering">Engineering</a></li>
						<li class="<?= $page=='medical' ? 'active' : ''; ?>"><a href="/medical">Medical</a></li>
						<li class="<?= $page=='foundation' ? 'active' : ''; ?>"><a href="/foundation">Foundation</a></li>
					</ul>
				</li>
				<li class="<?= $page=='about' ? 'active' : ''; ?>"><a href="/about">About Us</a></li>
				<!-- <li class="<?= $page=='faculty' ? 'active' : ''; ?>"><a href="/faculty">Faculty/ Toppers</a></li> -->
				<li class="<?= $page=='contact' ? 'active' : ''; ?>"><a href="/contact">Get In Touch</a></li>
			</ul>
		</nav>
		<!-- Section -->
		<section>
			<ul class="contact">
				<li class="fa-envelope-o"><a href="mailto:latesh644@gmail.com">latesh644@gmail.com</a></li>
				<li class="fa-phone">(+91) 77159 16926, 77159 16926</li>
				<li class="fa-map-marker">101, Integration Tutorial, Shreeji Solitaire, Khadakpada, Kalyan(W)</li>
			</ul>
		</section>
		<!-- Footer -->
		<footer id="footer">
			<p class="copyright">&copy; Integration Tutorial</p>
		</footer>
	</div>
</div>