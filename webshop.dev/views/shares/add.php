<meta charset="utf-8">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Nachfrage erstellen</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Teil Bezeichnung</label>
    		<input type="text" name="bezeichnung" class="form-control" placeholder="z.B. Schrauben xy" />
    	</div>
    	<div class="form-group">
    		<label>Ben&ouml;tigte Menge</label>
    		<input type="number" name="menge" class="form-control" placeholder="z.B. 100" />
    	</div>
    	<div class="form-group">
    		<label>Gew&uuml;nschte Qualit&auml;t</label>
    		<input type="text" name="qualitaet" class="form-control" placeholder="z.B. neu" />
    	</div>
        <div class="form-group">
            <label>Gew&uuml;nschter Lieferzeitpunkt</label>
            <input type="date" name="lieferzeitpunkt" class="form-control" placeholder="JJJJ-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
        </div>
    	<input class="btn btn-primary" type="submit" name="submit" value="Nachfrage erstellen" />
    	<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>