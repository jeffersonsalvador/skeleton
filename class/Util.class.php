<?php

function QueryStringSite($dir, $pagina, $default){
	
	if(file_exists($dir.$pagina.'.php')){
		include $dir.$pagina.'.php';
	} else {
		include $dir.$default.'.php';
	}
	
}

function dataBR($data){
	return implode('-', array_reverse(explode('-', $data)));
}

function money($numero){
		return number_format($numero, 2, ',', '.');
}