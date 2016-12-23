<?php
	include_once 'class/Util.class.php';
	
	$vetor = (isset($_GET['pagina'])) ? explode('-', $_GET['pagina']) : array() ;
	$pagina = (array_key_exists( 0, $vetor) && $vetor[0] != null ) ? $vetor[0] : 'home' ;
	
	$site = "Tênis Lynd";
	$author = "Ineo sites e sistemas";
	$description = "A Tenis Lynd é a sua melhor escolha quando o assunto é moda e estilo nos seus pés!";
	$url = "http://www.tenislynd.com.br"
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="<?= $author; ?>">
	<meta name="description" content="<?= $description; ?>">

	<title><?= ucfirst(str_replace("_", " ", $pagina))." | ".$site; ?> </title>
	
	<meta property="og:title" name="og:title" content="<?= ucfirst(str_replace("_", " ", $pagina))." | ".$site; ?> " >
	<meta property="og:description" content="<?= $description; ?>" >
	<meta property="og:image" name="og:image" content="" >
	<meta property="og:url" content="<?= $url; ?>" >
	<link rel=”canonical” href=”<?= "{$url}/{$pagina}" ?>” >
	
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300&subset=latin-ext' rel='stylesheet' type='text/css'>
	
	<!-- Font Awesome -->
	<link rel='stylesheet' href='font-awesome/css/font-awesome.min.css'>
	
	<!-- Boot -->
	<link rel="stylesheet" href="css/boot.css">

	<!-- My Style -->
	<link rel="stylesheet" href="css/my.css">

	<!-- CSS Plugin -->
	<link rel="stylesheet" href="css/slider/settings.css">
	<link rel="stylesheet" href="css/slider/slider.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/hover.css">
	
	<!-- Icon -->
	<link rel="shortcut icon" href="img/ico.ico" type="image/x-icon">
	<link rel="icon" href="img/ico.ico" type="image/x-icon">

</head>

<body>
	
	<?php include_once 'include/menu.php'; ?>
	<?php QueryStringSite('pages/', $pagina, 'home'); ?>
	<?php include_once 'include/rodape.php'; ?>
</body>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- Slider Revolution plugin -->
<script src="js/slider/slider.js"></script>			
<script src="js/slider/revolution.js"></script>

<script type="text/javascript" src="js/ajax-submit.js"></script>

<script src="js/slider/superfish.js"></script>

<script src="js/this.js"></script>


</html>