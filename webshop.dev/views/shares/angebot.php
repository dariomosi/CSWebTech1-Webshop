<meta charset="utf-8">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Angebot abgeben</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" value="<?php echo $_POST['nachfrage_id']; ?>" name="nachfrage_id">
        <input type="hidden" value="<?php echo $_POST['nachfrager_user_id']; ?>" name="nachfrager_user_id">
    	<div class="form-group">
    		<label>Teil Bezeichnung</label>
    		<input type="text" name="bezeichnung" class="form-control" placeholder="z.B. Schrauben xy" value="<?php echo $_POST['bezeichnung']; ?>" />
    	</div>
    	<div class="form-group">
    		<label>Menge</label>
    		<input type="number" name="menge" class="form-control" placeholder="z.B. 100" value="<?php echo $_POST['menge']; ?>" />
    	</div>
    	<div class="form-group">
    		<label>Qualit&auml;t</label>
    		<input type="text" name="qualitaet" class="form-control" placeholder="z.B. neu" value="<?php echo $_POST['qualitaet']; ?>" />
    	</div>
        <div class="form-group">
            <label>Preis</label>
            <input type="number" name="preis" class="form-control" placeholder="z.B. 300" />
        </div>
        <div class="form-group">
            <label>Lieferzeitpunkt</label>
            <input type="date" name="lieferzeitpunkt" class="form-control" placeholder="JJJJ-MM-DD" value="<?php echo $_POST['lieferzeitpunkt']; ?>" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
        </div>
    	<input class="btn btn-primary" type="submit" name="submit" value="Angebot abgeben" />
    	<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>