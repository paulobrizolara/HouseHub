<?php
function fixSeparator($path){
	return str_replace('/', DIRECTORY_SEPARATOR, $path);
}

function manifestDetails(){
	// Definindo o prefixo de instalação baseado no root do servidor
	$prefix = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').DIRECTORY_SEPARATOR;
	
        echo "DIR: " . __DIR__ . "\n";
        echo "prefix: " . $prefix . "\n";
        
	// Carregando as diretrizes
	$d = DIRECTORY_SEPARATOR;
	$hubFile = dirname(__FILE__).$d.'..'.$d.'..'.$d.'hub.ini';
	$configFile = dirname(__FILE__).$d.'config'.$d.'directives.json';
	
	if(is_file($configFile) && is_file($hubFile)){
		$directives = json_decode(file_get_contents($configFile), true);
		$iniFile = parse_ini_file($hubFile);
		
		$projectRoot = $prefix.fixSeparator($iniFile['projectRoot']);
                
                
                echo "Project Root = ".$projectRoot . "\n";
                
                
                
		$output = $projectRoot.$d.($iniFile['manifestPath']);
		
		$codePacks = $directives['contents'];
		return array('root' => $projectRoot, 'output' => $output, 'codePacks' => $codePacks);
	}else{
		echo 'Erro';
		exit(0);
	}
}	
?>