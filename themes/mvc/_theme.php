<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">    

	<!--BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/c975c3f558.js" crossorigin="anonymous"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="<?= ROOT; ?>/themes/mvc/assets/css/style.css">
	<!-- jQuery -->
	<script src="<?= ROOT; ?>/themes/mvc/assets/js/scripts.js"></script>


	<!-- Title Controller -->
	<title><?= $title; ?></title>
</head>
<body>

	<?= $v->section("content"); ?>


	
	
	<?= $v->section("scripts"); ?>
</body>
</html>