<?php include 'header.php'; ?>
			<div class="hero-text text-center">
				<h1>hello.</h1>
				<h4>My name is Alex Mattingley and I develop websites and applications</h4>
				<a class="glyphicon glyphicon-menu-down text-center" href="#work"></a>
				<!-- Text here is going to be generated by jav -->
			</div>
		</div>
		<div class="container-fluid">
			<div class="work-block">
				<a name="work"></a>
				<h2 class="text-center">Recent Projects</h2>
				<ul class="list-unstyled clearfix">
					<div class="project-row clearfix" id="proj-row-1">
						<li class="col-sm-4"> 
							<div class="mbsr-img text-center indiv-project">
								<a class="a_wrap" href="about.html">
									<div class="text-cover">
										<div class="text-container">
											<h3><a href="#">MBSR Mentorship</a></h3>
											<p>A Simple Wordpress portfolio site</p>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-sm-4">
							<div class="karen-img text-center indiv-project">
								<div class="text-cover">
									<div class="text-container">
										<h3><a href="#">Karen Redding</a></h3>
										<p>Blah Blah Blah</p>
									</div>
								</div>
							</div>
						</li>
						<li class="col-sm-4"> 
							<div class="memory-img text-center indiv-project">
								<div class="text-cover">
									<div class="text-container">
										<h3><a href="#">Memory Match Game</a></h3>
										<p>A slightly offensive Memory Match Game</p>
									</div>
								</div>
							</div>
						</li>
					</div>
					<div class="project-row clearfix" id="proj-row-2">
						<li class="col-sm-4"> 
							<div class="mbsr-img text-center indiv-project">
								<div class="text-cover">
									<div class="text-container">
										<h3><a href="#">Hello There</a></h3>
										<p>A Simple Wordpress portfolio site</p>
									</div>
								</div>
							</div>
						</li>
						<li class="col-sm-4">
							<div class="karen-img text-center indiv-project">
								<div class="text-cover">
									<div class="text-container">
										<h3><a href="#">Karen Redding</a></h3>
										<p>Blah Blah Blah</p>
									</div>
								</div>
							</div>
						</li>
						<li class="col-sm-4"> 
							<div class="memory-img text-center indiv-project">
								<div class="text-cover">
									<div class="text-container">
										<h3><a href="#">Memory Match Game</a></h3>
										<p>A slightly offensive Memory Match Game</p>
									</div>
								</div>
							</div>
						</li>
					</div>
				</ul>

				<h5 class="text-center more-projects"><a href="javascript:;">More Projects</a><i class="glyphicon glyphicon-menu-down text-center"></i></h5>
			</div>
		</div>
		<div class="skills-block">
			<div class="container-fluid">
				<a name="work"></a>
				<h2 class="text-center">Code Skills & Languages</h2>
				<p class="text-center">I speak to the machines so you don't have to (unless you want to of course)</p>
				<ul class="list-unstyled">
					<li class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-lg-2 col-lg-offset-2"> 
						<i class="fa fa-wordpress fa-5x text-center"></i>
						<h4 class="text-center">Wordpress</h4>
						<p class="text-center">If you are looking to develop a useable hard to break site, wordpress is a good way to go. I can help not only build your site but I can teach you the ins and outs of basic site managment.</p>
					</li>
					<li class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-lg-2 col-lg-offset-1">
						<i class='fa fa-github fa-5x text-center'></i>
						<h4 class="text-center">Git & Github</h4>
						<p class="text-center">Gone are the days of "oh-shit-oh-shit what did I do?!?!" development. The first thing I learned as a developer was version control and I won't start a project without good old git.</p>
					</li>
					<li class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-lg-2 col-lg-offset-1"> 
						<i class="fa fa-code fa-5x text-center"></i>
						<h4 class="text-center">Code</h4>
						<p class="text-center">I use HTML5 and PHP for structure, CSS3 for styling, and Javascript/JQuery for interaction.</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="contact-block container-fluid">
			<a name="contact"></a>
			<h2 class="col-xs-12 col-md-11 col-md-offset-1 col-lg-10 col-lg-offset-2">Contact Me</h2>
			<div class="col-sm-6 col-md-4 col-md-offset-1 col-lg-offset-2">
				<form action="validate.php" method="POST" id="form">
				  	<div class="form-group">
					    <label for="name">Name </label>
					    <input type="text" id="name" name="name" class="form-control">
				    </div>
				    <div class="form-group">
					    <label for="email">Email</label>
					    <input type="text" id="email" name="email" class="form-control">
				    </div>
				    <div class="form-group">
					    <label for="message">Message</label>
					    <textarea id="message" name="message" class="form-control"></textarea>
				    </div>
				    <button class="btn btn-lg btn-green">Send</button>
				</form>
			</div>
			<div class="col-sm-6 col-md-4 col-md-offset-1">
				<h2>Phone &amp; Email</h2>
				<a class="p_Num" href="tel:949.280.6557"></a>
				<a class="email_add" href="mailto:alexmattingley@gmail.com"></a>
			</div>
		</div>
		<?php include 'footer.php'; ?>