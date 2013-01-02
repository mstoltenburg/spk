<!DOCTYPE html>
<html lang="de">

<?php include '../include/config.inc.php'; $BASE_DIR = 'termine'; ?>

<head>
	<?php include $BASE_URL . 'include/snippets/head.inc.php'; ?>
</head>

<body>
	<?php include $BASE_URL . 'include/snippets/header.inc.php'; ?>

	<div id="content">
		<h2>Termine</h2>
	<div id="stage">

		<h5>Sprechzeiten</h5>
		<p>
			Montag-Donnerstag: 8-13 / 14-18 Uhr<br />
			Freitag: 8-13 Uhr<br />
		</p>

		<p>
			Sie haben die Möglichkeit, sich telefonisch, per Fax oder schriftlich anzumelden.
		</p>

		<p>
			Aufgrund des großen Andrangs sind die Telefonleitungen häufig belegt.<br />
			Bitte machen Sie daher auch von den letztgenannten Möglichkeiten Gebrauch.
		</p>

		<p>
			Eine Anmeldung per E-Mail ist derzeit noch nicht möglich.
		</p>

		<p>
			<?php include $BASE_URL . 'include/snippets/phone.inc.php'; ?>
		</p>

	</div>
	</div>

	<?php include $BASE_URL . 'include/snippets/global.inc.php'; ?>

	<?php include $BASE_URL . 'include/snippets/footer.inc.php'; ?>

</body>

</html>
