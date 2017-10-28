<meta charset="utf-8">
<div>
	<div class="row">
	<?php if(isset($_SESSION['nachfrager_logged_in'])) : ?>
		<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Nachfrage erstellen</a>
	<?php endif; ?>
		<?php if(isset($_SESSION['anbieter_logged_in'])) : ?>
		  <form method="post" action="shares">
		  <div class="col-lg-6">
		    <div class="input-group">
		      <input type="text" class="form-control" placeholder="Search for..." name="searchValue">
		      <span class="input-group-btn">
		        <input type="submit" name="suche" value="Suche" class="btn" />
		      </span>
		    </div><!-- /input-group -->
		  </div><!-- /.col-lg-6 -->
		  </form>
		 <?php endif; ?>
	</div><!-- /.row -->
	<?php foreach ($viewmodel as $item) : ?>
		<div class="well">
			<form method="post" action="shares/angebot">
			<input type="hidden" name="nachfrage_id" value="<?php echo $item['nachfrage_id']; ?>">
			<input type="hidden" name="nachfrager_user_id" value="<?php echo $item['user_id']; ?>">
			<input type="hidden" name="bezeichnung" value="<?php echo $item['bezeichnung']; ?>">
			<input type="hidden" name="menge" value="<?php echo $item['menge']; ?>">
			<input type="hidden" name="qualitaet" value="<?php echo $item['qualitaet']; ?>">
			<input type="hidden" name="lieferzeitpunkt" value="<?php echo $item['lieferzeitpunkt']; ?>">
				<h3><?php echo $item['bezeichnung']; ?><h5 class="text-right">NachfrageNr.: <?php echo $item['nachfrage_id']; ?></h5></h3>
				<hr />
					<p>Menge: <?php echo $item['menge']; ?> St&uuml;ck</p>
					<p>Qualit&auml;t: <?php echo $item['qualitaet']; ?></p>
					<p>Gew&uuml;nschter Lieferzeitpunkt: <?php echo $item['lieferzeitpunkt']; ?></p>
				<hr />
					<div>
						<p class="text-right"><small>Nachfrage vom: <?php echo $item['create_date']; ?></small></p>
						<?php if($_SESSION['user_data']['id'] === $item['user_id']) : ?>
							<input type="submit" name="delete" value="Nachfrage l&ouml;schen" class="btn btn-danger" formaction="shares">
						<?php endif; ?>
						<?php if(isset($_SESSION['anbieter_logged_in'])) : ?>
							<input type="submit" name="transfer" value="Angebot abgeben" class="btn btn-success">
						<?php endif; ?>
					</div>
			</form>
		</div>
	<?php endforeach; ?>
</div>