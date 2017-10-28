<!DOCTYPE html><meta charset="utf-8">
<html>
<head>
	<title>BusinessStreamline's B2B</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">BuisnessStreamline</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo ROOT_URL; ?>">Home </a></li>
            <li class="active"><a href="<?php echo ROOT_URL; ?>shares">Nachfragen </a>
              <?php if(isset($_SESSION['nachfrager_logged_in'])) : ?>
              <li class="active"><a href="<?php echo ROOT_URL; ?>angebote">Angebote </a></li>
              <?php endif; ?>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION['nachfrager_logged_in'])) : ?>
            <li class="active"><a href="<?php echo ROOT_URL; ?>">Willkommen <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li class="active"><a href="<?php echo ROOT_URL; ?>users/logout">Logout </a></li>
            <?php elseif(isset($_SESSION['anbieter_logged_in'])) : ?>
              <li class="active"><a href="<?php echo ROOT_URL; ?>">Willkommen <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li class="active"><a href="<?php echo ROOT_URL; ?>users/logout">Logout </a></li>
            <?php else : ?>
            <li class="active"><a href="<?php echo ROOT_URL; ?>users/login">Login </a></li>
            <li class="active"><a href="<?php echo ROOT_URL; ?>users/register">Registrieren </a></li>
           <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <?php Messages::display(); ?>
        <?php require($view); ?>
      </div>

    </div><!-- /.container -->
</body>
</html>