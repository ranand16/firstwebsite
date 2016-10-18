<?php
	$title = "";
	$active = "home";
	include "_includes/head.php";
?>

<body class="<?= $active ?>">
	<?php include_once "_includes/header.php"; ?>

	<div class="container col-md-12">
		<section>
			<ol>
				<li>Include will include any file multiple times</li>
				<li>Include_once will include any file only once</li>
				<li>require will strictly require any file multiple times</li>
				<li>require_once will strictly require any file only once</li>
				<li>Constant are like data container which never changes</li>
			</ol>
			<ul>
			   <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
			   <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
			   <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
			   <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
			</ul>
		</section>
	</div>



	<?php include_once "_includes/footer.php"; ?>
