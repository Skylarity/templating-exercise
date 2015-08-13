<?php
$PAGE_TITLE = "Templating Exercise";
require_once("php/lib/head-utils.php");
?>
<body class="sfooter">
	<div class="sfooter-content">
		<header>
			<?php require_once("php/lib/header.php"); ?>
		</header>

		<div class="container content">
			<div class="row">
				<section class="col-md-4">
					<?php require_once("php/lib/side-panel.php"); ?>
				</section>

				<main class="col-md-8">
					<h2>
						This is the main content.
					</h2>

					<p>
						Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an
						unknown microorganism. The organisms fuse to the nerve, intertwining at the molecular level.
						That's why the transporter's biofilters couldn't extract it. The vertex waves show a K-complex
						corresponding to an REM state. The engineering section's critical. Destruction is imminent.
						Their robes contain ultritium, highly explosive, virtually undetectable by your transporter.
					</p>

					<p>
						Deflector power at maximum. Energy discharge in six seconds. Warp reactor core primary coolant
						failure. Fluctuate phaser resonance frequencies. Resistance is futile. Recommend we adjust
						shield harmonics to the upper EM band when proceeding. These appear to be some kind of
						power-wave-guide conduits which allow them to work collectively as they perform ship functions.
						Increase deflector modulation to upper frequency band.
					</p>
					
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1"
								   placeholder="Password">
						</div>
						<div class="form-group">
							<p class="help-block">Sell your soul. Do it.</p>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" checked> Opt in to selling your soul
							</label>
						</div>
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</main>
			</div>
		</div>
	</div>

	<footer>
		<?php require_once("php/lib/footer.php"); ?>
	</footer>
</body>
</html>