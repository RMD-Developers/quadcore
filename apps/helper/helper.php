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

function removeWhitespace($content)
{
    $content = preg_replace('~>\s*\n\s*<~', '><', $content);
    return preg_replace('!\s+!smi', ' ', $content);
}