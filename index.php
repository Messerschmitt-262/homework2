<?php
//menu description
$menu = 
	[
		[
			'url' => '/',
			'title' => 'Games',
			'sub_menu' => 
				[	
					[
						'url' => '/halflife',
						'title' => 'Half-Life'
					],
					[
						'url' => '/halflife2',
						'title' => 'Half-Life 2'
					],
					[
						'url' => '/homm3',
						'title' => 'Heroes of Might and Magic III'
					],
					[
						'url' => '/deusex',
						'title' => 'Deus Ex'
					],
					[
						'url' => '/exmachina',
						'title' => 'Ex Machina'
					]

				]
		],
		[
			'url' => '/company',
			'title' => 'Company'
		],
		[
			'url' => '/jobs',
			'title' => 'Jobs'
		],
		[
			'url' => '/news',
			'title' => 'News'
		],
		[
			'url' => '/contacts',
			'title' => 'Contacts'
		],
		[
			'url' => '/download',
			'title' => 'Download',
			'sub_menu' => 
			[
				[
					'url' => '/drivers',
					'title' => 'Drivers'
				],
				[
					'url' => '/documentation',
					'title' => 'Documentation',
					'sub_sub_menu' => 
						[
							[
								'url' => '/solutions',
								'title' => 'Solutions',
							],
							[
								'url' => '/datasheets',
								'title' => 'Datasheets',
							],
							[
								'url' => '/licenses',
								'title' => 'Licenses',
							]
					]
				]
			]
		]
	];
//features list description
$features = [

	[
		'icon' => 'fa-comment',
		'name' => 'Mattis velit diam vulputate',
		'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],

	[
		'icon' => 'fa-refresh',
		'name' => 'Lorem ipsum dolor sit veroeros',
		'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],

	[
		'icon' => 'fa-picture-o',
		'name' => 'Pretium phasellus justo lorem',
		'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],

	[
		'icon' => 'fa-cog',
		'name' => 'Tempus sed pretium orci',
		'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],

	[
		'icon' => 'fa-wrench',
		'name' => 'Aliquam consequat et feugiat',
		'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],

	[
		'icon' => 'fa-check',
		'name' => 'Dolore laoreet aliquam mattis',
		'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],

];
//contact description
$contact = [

	[
		'icon' => 'fa-home',
		'name' => 'Mailing Address',
		'description' => 'Untitled Corporation<br /> 1234 Somewhere Rd #987<br />							Nashville, TN 00000-0000'
	],

	[
		'icon' => 'fa-comment',
		'name' => 'Social',
		'link' =>
			[	
		 		'@untitled-corp',
				'linkedin.com/untitled',
				'facebook.com/untitled'
			]
	],

	[
		'icon' => 'fa-envelope',
		'name' => 'Email',
		'link' => 
			[
				'info@untitled.tld'
			]
	],

	[
		'icon' => 'fa-phone',
		'name' => 'Phone',
		'description' => '(000) 555-0000'
	]
];
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Escape Velocity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Escape Velocity</a></h1>
								<p>A free responsive site template by HTML5 UP</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<?php	foreach($menu as $item) { ?>
									<li><a href="<?=$item['url'] ?>"><?=$item['title']?></a>
										<?php if(isset($item['sub_menu']) AND !empty($item['sub_menu'])) { ?>
										<ul>
											<?php	foreach($item['sub_menu'] as $sub_item) { ?>
											<li>
												<a href="<?=$sub_item['url']?>"><?=$sub_item['title']?></a>
												<?php if(isset($sub_item['sub_sub_menu']) AND !empty($sub_item['sub_sub_menu'])) { ?>
												<ul>
													<?php	foreach($sub_item['sub_sub_menu'] as $sub_sub_item) { ?>	
													<li>
														 	<a href="<?=$sub_sub_item['url']?>"><?=$sub_sub_item['title']?></a>
													</li>
													<?php } ?>	
												</ul>
												<?php } ?>
											</li>
											<?php } ?>
										</ul>
										<?php } ?>
									</li>
									<?php } ?>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">The Introduction</div>
					<section id="intro" class="container">
						<p class="style1">So in case you were wondering what this is all about ...</p>
						<p class="style2">
							Escape Velocity is a free responsive<br class="mobile-hide" />
							site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>
						</p>
						<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects &ndash; just be sure to credit us!</p>
						<ul class="actions">
							<li><a href="#" class="button style3 big">Proceed</a></li>
						</ul>
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">The Details</div>
					<div id="main" class="container">

						<!-- Image -->
							<a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2>Dolor consequat feugiat amet veroeros</h2>
									<p>Feugiat dolor nullam orci pretium phasellus justo</p>
								</header>
								<div class="feature-list">
									<?php 
										$features_items = count($features);
										for($i = 0; $i < $features_items; $i++):
									?>
										<?php if($i % 2 == 0):?>
											<div class="row">
										<?php endif; ?>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon <?=$features[$i]['icon']?>"><?=$features[$i]['name']?></h3>
												<p><?=$features[$i]['description']?></p>
											</section>
										</div>
										<?php if(!($i % 2 == 0) OR ($i+1 == $features_items)):?>
											</div>
										<?php endif;?>
										<?php	endfor;	?>
								<ul class="actions actions-centered">
									<li><a href="#" class="button style1 big">Get Started</a></li>
									<li><a href="#" class="button style2 big">More Info</a></li>
								</ul>
							</section>
					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">The Rest Of It</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>Ipsum sapien elementum portitor?</h2>
							<p>
								Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
								Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
										<form method="post" action="#">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<?php
											$contact_items = count($contact);
											for($i = 0; $i < $contact_items; $i++):
										?>
											<?php if($i % 2 == 0):?>
										<div class="row">
											<?php endif;?>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon <?=$contact[$i]['icon']?>"><?= $contact[$i]['name'] ?></h3>
													<p>
														<?php if (isset($contact[$i]['link']) AND !empty($contact[$i]['link'])): ?>
															<?php foreach ($contact[$i]['link'] as $link): ?>
																<a href="#"><?=$link?></a><br />
															<?php endforeach ?>
														<?php endif ?>
														<?php 
															if(isset($contact[$i]['description']) and !empty($contact[$i]['description'])){
															echo $contact[$i]['description'];
															}
														?>
														
													</p>
												</section>
											</div>
											<?php if(!($i % 2 == 0) OR ($i+1 == $contact_items)): ?>
												</div>
											<?php endif ?>
										<?php endfor ?>
									</section>
											</div>
										</div>
										
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>