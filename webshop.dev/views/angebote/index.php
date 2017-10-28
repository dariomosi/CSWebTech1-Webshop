<meta charset="utf-8">
<?php foreach ($viewmodel as $item) : ?>
		<div class="well">
			<form method="post" action="angebote">
			<input type="hidden" name="nachfrage_id" value="<?php echo $item['nachfrage_id']; ?>">
			<input type="hidden" name="angebot_id" value="<?php echo $item['angebot_id']; ?>">
			<input type="hidden" name="user_id" value="<?php echo $item['user_id']; ?>">
				<h3><?php echo $item['bezeichnung']; ?><h5 class="text-right">Zu NachfrageNr.: <?php echo $item['nachfrage_id']; ?></h5></h3>
				<hr />
					<p>Menge: <?php echo $item['menge']; ?> St&uuml;ck</p>
					<p>Qualit&auml;t: <?php echo $item['qualitaet']; ?></p>
					<p>Preis: <?php echo $item['preis']; ?>.-</p>
					<p>Lieferzeitpunkt: <?php echo $item['lieferzeitpunkt']; ?></p>
				<hr />
				<?php if($item['bestellt'] == 0) : ?>
					<input type="submit" name="submit" value="Bestellung generieren" class="btn btn-success">
				<?php endif; ?>
				<?php if($item['bestellt'] == 1) : ?>
					<button class="btn btn-success" disabled>Bestellt</button>
				<?php endif; ?>
					<input type="submit" name="delete" value="L&ouml;schen" class="btn btn-danger">
			</form>
		</div>
	<?php endforeach; ?>