<?php include('header.php'); ?>
<body>
<!-- Start of first page -->
<div data-role="page" data-theme="d" id="news" data-title="News">
	<div data-role="header" data-theme="d">
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<h1>News</h1>
	</div><!-- /header -->

	<div data-role="content">
		<ul data-role="listview">
			<li>
				<a href="news-detail.php">
					<h3>Art Innovation News</h3>
				</a>
			</li>
			<li>
				<a href="news-detail.php">
					<h3>IT Strategy and Transformation</h3>
				</a>
			</li>
			<li>
				<a href="news-detail.php">
					<h3>Mobility News</h3>
				</a>
			</li>
			<li>
				<a href="news-detail.php">
					<h3>Systems Integration Consulting</h3>
				</a>
			</li>
		</ul>
	</div><!-- /content -->
	<?php include('footer_nav.php'); ?>
</div><!-- /page -->
</body>
</html>