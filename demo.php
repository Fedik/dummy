<?
require_once 'class_dummy.php';
$dummy = new Dummy;
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Demo Dummy</title>
</head>
<body>
	<h1><?= $dummy->product(); ?></h1>
	<p><img src="<?= $dummy->image(); ?>" alt="Product" /></p>
	<h3>$<?= $dummy->price(); ?></h3>
	<p><?= $dummy->text(100,500); ?></p>
	<hr />
	<p><strong><?= $dummy->name(); ?></strong></p>
	<p><?= $dummy->address(); ?></p>
</body>
</html>
