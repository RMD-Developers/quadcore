<?php
	if (!defined('BASE_PATH')) exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php out($TITLE); ?></title>
<?php foreach($CSS_SRC as $c): ?>
<link href="<?php out(getFileVersion($c)); ?>" rel='stylesheet' type='text/css'> 
<?php endforeach; ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>   