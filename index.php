<!DOCTYPE html>
<html lang="de">

<?php include 'include/config.inc.php'; $BASE_URL = ''; ?>

<head>
<?php include $BASE_URL . 'include/snippets/head.inc.php'; ?>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="<?php echo $BASE_URL; ?>js/map.js"></script>
</head>

<body>
<?php include $BASE_URL . 'include/snippets/header.inc.php'; ?>

<?php include $BASE_URL . 'include/snippets/map.inc.php'; ?>

<?php include $BASE_URL . 'include/snippets/global.inc.php'; ?>

<?php include $BASE_URL . 'include/snippets/footer.inc.php'; ?>
</body>

</html>
