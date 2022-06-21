<?php
//include('despachar.php');

echo $serv=$_SERVER['HTTP_HOST'];
//$serv="localhost";
//header("Refresh:5");

/* function geohere($direccion){
$APPIDtql='E4oYIPVZlxe6ygP6vX8h';
$APPCODEtql='14t9JqVETvA1ves4srQxaw';

$json = 'http://geocoder.api.here.com/6.2/geocode.json?app_id='.urlencode($APPIDtql).'&app_code='.urlencode($APPCODEtql).'&searchtext='.urlencode($direccion);
        $json = file_get_contents($json) or die("Error en la carga de la URL, Sin carga de datos. <br /> Favor de contactar con GrupoARTEP.");
		$json = json_decode($json);		
			$lat = null;
				$location = $json->{"Response"}->{"View"}[0]->{"Result"}[0]->{"Location"};
				$mapaDir= $location->{"Address"}->{"Label"};
				$lat = $location->{"DisplayPosition"}->{"Latitude"};
				$lng = $location->{"DisplayPosition"}->{"Longitude"};

			if($lat<>null){
				return array($lat, $lng, $mapaDir);
					}else{
						echo "<br />";
							$status="ERROR";
						  return $status;  
						}}


function inversa($cor){
$apiKEY='BNdtgpGwn3n-BcDpuy0_FXEKxJVrX1EkT1wHO-J5Cic&lang=es';

$json = 'https://revgeocode.search.hereapi.com/v1/revgeocode?at='.$cor.'&apiKey='.$apiKEY;
        $json = file_get_contents($json) or die("Error en la carga de la URL, Sin carga de datos. <br /> Favor de contactar con GrupoARTEP.");
		$json = json_decode($json);		
			$dir = null;
				$location = $json->{"items"}[0]->{"address"};

				$dir = $location->{"label"};
				$calle = $location->{"street"};
				$num = $location->{"houseNumber"};
				$col = $location->{"district"};
			//	$lng = $location->{"DisplayPosition"}->{"Longitude"};

			if($dir<>null){
				return array($dir, $calle, $num, $col);
					}else{
						echo "<br />";
							$status="ERROR";
						  return $status;  
						}

}
*/
///  CONECCION CON EL SERVIDOR PRINCIPAL
$con1 = new mysqli($serv,"darmany","1Icosaedro+","traccar");
if (mysqli_connect_errno()){
	echo 'CONECCIÓN............... FAIL<br>';
    }else{
    	echo'CONECCIÓN............... OK</br>';
    }
//mysqli_set_charset($con1, "utf8");

$resulta2=mysqli_query($con1,"SELECT * FROM reportes");
while($row=mysqli_fetch_array($resulta2)){

$idevent=$row['idevent'];
$lat=$row['latitude'];
$lon=$row['longitude'];
$coor2=$lat.','.$lon;
$data = inversa($coor2);
$direc= $data[0];
$calle= $data[1];
$no= $data[2];
$colonia= $data[3];

$despachar= despachar($lat,$lon);
echo $sector= $despachar[0];
echo $area= $despachar[1];

$sen='INSERT INTO pulso (direccion,calle,no,colonia,status) VALUES ('$direc','$calle','$no','$colonia','OK')';
$nvoRep=mysqli_query($con1, $sen);
    if (!$nvoRep){
    	echo 'REPORTE................. FAIL<br>';
    }else{
    	echo'REPORTE................. OK</br>';
    }

$band =  mysqli_query($con1, 'UPDATE tc_events SET type='alarm OK' WHERE (id='$idevent')');
    if (!$band){
    	echo 'BANDERA................. FAIL<br>';
    }else{
    	echo'BANDERA................. OK</br>';
    }

$close1 = mysqli_close($con1); 
            if(!$close1){  
         echo 'DESCONECCIÓN........... FAIL<br>';
    }else{
    	 echo'DESCONECCIÓN........... OK</br>';
    }
//}