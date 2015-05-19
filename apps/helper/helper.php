<?php

/*
 * @screen data
 */
function out($data)
{
	echo($data);
}

function getFileVersion($file){
	return $file . "?ver=" . filemtime($_SERVER["DOCUMENT_ROOT"] . $file);
}

function pre($data){
	echo json_encode($data);
	exit;
}