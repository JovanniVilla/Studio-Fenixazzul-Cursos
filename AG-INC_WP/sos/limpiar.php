<?///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
// IMPORTENTE! ESTE CODIGO FORMA PARTE DEL SISTEMA INTEGRAL PARA LA GESTION            //
// Y ATENCION DE EMERGENCIAS DE GrupoARTEP® Copyright 2018©                            //
// Certificado Público del Derecho de Autor  03-2018-041810143800-01                   //
// Se prohibe utilizarlo con fines distintos alos etipudados en el contrato            //
// asi como la copia, publicacion o dibulgacion de una parte o la totalidad del mismo. //
/////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////?>
<?php
   function limpiar($String){
    $String = str_replace(array('á','à','â','ã','ª','ä'),"a",$String);
    $String = str_replace(array('Á','À','Â','Ã','Ä'),"A",$String);
    $String = str_replace(array('Í','Ì','Î','Ï'),"I",$String);
    $String = str_replace(array('í','ì','î','ï'),"i",$String);
    $String = str_replace(array('é','è','ê','ë'),"e",$String);
    $String = str_replace(array('É','È','Ê','Ë'),"E",$String);
    $String = str_replace(array('ó','ò','ô','õ','ö','º'),"o",$String);
    $String = str_replace(array('Ó','Ò','Ô','Õ','Ö'),"O",$String);
    $String = str_replace(array('ú','ù','û','ü'),"u",$String);
    $String = str_replace(array('Ú','Ù','Û','Ü'),"U",$String);
    $String = str_replace(array('[','^','´','`','¨','~',']'),"",$String);
    $String = str_replace("ç","c",$String);
    $String = str_replace("Ç","C",$String);
    //$String = str_replace("ñ","n",$String);
    //$String = str_replace("Ñ","N",$String);
    $String = str_replace("Ý","Y",$String);
    $String = str_replace("ý","y",$String);
     
	$String = str_replace("\t1139\t\n8","",$String);
	$String = str_replace("\n\n\n"," ",$String);  
	$String = str_replace("\t\t\n"," ",$String);  
	   $String = str_replace("\n"," ",$String); 
	   $String = str_replace("\t"," ",$String); 
    $String = str_replace("&aacute;","a",$String);
    $String = str_replace("&Aacute;","A",$String);
    $String = str_replace("&eacute;","e",$String);
    $String = str_replace("&Eacute;","E",$String);
    $String = str_replace("&iacute;","i",$String);
    $String = str_replace("&Iacute;","I",$String);
    $String = str_replace("&oacute;","o",$String);
    $String = str_replace("&Oacute;","O",$String);
    $String = str_replace("&uacute;","u",$String);
    $String = str_replace("&Uacute;","U",$String);
	$String = strtoupper($String);
    return $String;
}
?>
