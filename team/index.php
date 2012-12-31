<!DOCTYPE html>
<html lang="de">

<?php include '../include/config.inc.php'; $BASE_DIR = 'team'; ?>

<head>
	<?php include $BASE_URL . 'include/snippets/head.inc.php'; ?>
</head>

<body>
	<?php include $BASE_URL . 'include/snippets/header.inc.php'; ?>

	<div id="content">
	<div id="stage" class="slider">
	<div id="slider">

		<ul class="slides">
			<li id="slide1">
				<div class="slide">
					<h3>Unser Team besteht aus</h3>
					<ul>
						<li>5 Ärztinnen für Innere Medizin</li>
						<li>1 MTA</li>
						<li>8 Arzthelferinnen</li>
						<li>1 Sekretärin</li>
					</ul>
				</div>
				<a href="#slide4" class="previous"></a>
				<a href="#slide2" class="next"></a>
			</li>

			<li id="slide2">
				<div class="slide portraits">
					<img src="../images/portraits/DSC_1770k.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1736b.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1897b.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1869a.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1746b.jpg" width="140" height="210" alt="" />
				</div>
				<a href="#slide1" class="previous"></a>
				<a href="#slide3" class="next"></a>
			</li>

			<li id="slide3">
				<div class="slide portraits">
					<img src="../images/portraits/DSC_1744b.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1703b.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1886b.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1731b.jpg" width="140" height="210" alt="" />
				</div>
				<a href="#slide2" class="previous"></a>
				<a href="#slide4" class="next"></a>
			</li>

			<li id="slide4">
				<div class="slide portraits">
					<img src="../images/portraits/DSC_1695b.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1881a.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1688b.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1721b.jpg" width="140" height="210" alt="" />
					<img src="../images/portraits/DSC_1706c.jpg" width="140" height="210" alt="" />
				</div>
				<a href="#slide3" class="previous"></a>
				<a href="#slide1" class="next"></a>
			</li>

		</ul>

		<ol id="skiplinks">
			<li><a href="#slide1"></a></li>
			<li><a href="#slide2"></a></li>
			<li><a href="#slide3"></a></li>
			<li><a href="#slide4"></a></li>
		</ol>
	</div>
	</div>
	</div>

	<?php include $BASE_URL . 'include/snippets/global.inc.php'; ?>

	<?php include $BASE_URL . 'include/snippets/footer.inc.php'; ?>

	<script type="text/javascript" src="<?php echo $BASE_URL; ?>js/spk.js"></script>
</body>

</html>
