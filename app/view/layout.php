<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php echo $this->getTitle() ?></title>
	<meta charset="utf-8">
	<meta name="author" content="Design em foco">
	<meta name="description" content="<?php echo $this->getDescription() ?>">
	<meta name="keywords" content="<?php echo $this->getKeywords() ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo DIRCSS.'Style.css' ?>">
	<?php echo $this->addHead() ?>
</head>
<body>

	<div class="header">
	<?php echo $this->addHeader() ?>
	</div>
	<div class="main">
	<?php echo $this->addMain() ?>
	</div>
	<div class="footer">
	<?php echo $this->addFooter() ?>
	</div>
	
</body>
</html>