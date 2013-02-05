	<header>
		<hgroup class="clearfix">
			<h3>Dr. med. Regina Hammoser
				Dr. med. Barbara Rautenberg
				Dr. med. Kathrin Seidel
				Dr. med. Natascha Wiedemann
				Dr. med. Hilke Wientgen</h3>

			<h1><a href="<?php echo $BASE_URL; ?>">Schilddr&uuml;senpraxis
				Kantstra&szlig;e</a></h1>
			<h2>Innere Medizin</h2>
			<h2>Hormonlabor</h2>
			<h2>Szintigrafie</h2>
		</hgroup>

		<nav>
			<h4>Inhalt</h4>
			<ul class="clearfix">
<?php foreach ($menu as $k => $v) {
		$li = '<li>';
		if ($k == $BASE_DIR) {
			$li = '<li class="sel">';
		} ?>
				<?php echo $li; ?><a href="<?php echo $BASE_URL . $k; ?>"><span class="icon <?php echo $v['class']; ?>"></span><span class="label"><?php echo $v['label']; ?></span></a></li>
<?php } ?>
			</ul>
		</nav>
	</header>
