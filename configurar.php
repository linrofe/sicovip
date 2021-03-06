<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
	<title>Sicovip</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
</head>
<header>
	<?php include ("php/navcli.php");
  include("php/client.php");?>
</header>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-5">
  <?php if($person!=null):?>

 <div class="container">
<div class="row">
<div class="col-md-5"> 
	<form role="form" method="post" action="php/actualiCli.php">
  <div class="form-group">
    <label for="sv01cdtpc">Codigo IT</label>
     <p><?php echo $person->sv01cdtpc; ?></p>
    <input type="hidden" class="form-control"  value="<?php echo $person->sv01cdtpc; ?>" name="sv01cdtpc" >
  </div>
<div class="form-group">
    <label for="sv07cedt">Cedula</label>
    <p><?php echo $person->sv01cedc; ?></p>
    <input type="hidden" class="form-control" value="<?php echo $person->sv01cedc; ?>" name="sv01cedc" >
  </div>
    <div class="form-group">
    <label for="sv01nomc">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01nomc; ?>" name="sv01nomc" >
  </div>
  <div class="form-group">
    <label for="sv01apdc">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01apdc; ?>"  name="sv01apdc" >
  </div>
      <div class="form-group">
    <label for="sv01apct">Telefono:</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01telc; ?>"  name="sv01telc" >
  </div>
    <div class="form-group">
    <label for="sv01apct">Correo:</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01emc; ?>"  name="sv01emc" >
  </div>
  <div class="form-group">
    <label for="sv01pass">Contraseña: </label>
    <input type="password" class="form-control" name="sv01pass" >
  </div>
    <div class="form-group">
    <label for="sv01pass">Repita contraseña</label>
    <input type="password" class="form-control" name="valpass" >
  </div>

 <button type="submit" class="btn btn-default">Actualizar</button>
</form>
		<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
	</div>
	</div>
	</div>
    </div>
  </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
</body>
</html>