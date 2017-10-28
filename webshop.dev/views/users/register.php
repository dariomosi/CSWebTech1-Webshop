<meta charset="utf-8">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Benutzer Registrieren</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Name</label>
    		<input type="text" name="name" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Email</label>
    		<input type="email" name="email" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Passwort</label>
    		<input type="password" name="password" class="form-control" />
    	</div>
        <div class="form-group">
            <input type="radio" name="type" value="Anbieter">Anbieter</input>
            <input type="radio" name="type" value="Nachfrager">Nachfrager</input>
        </div>
        <div>
    	   <input class="btn btn-primary" name="submit" type="submit" value="Registrieren" />
        </div>
    </form>
  </div>
</div>