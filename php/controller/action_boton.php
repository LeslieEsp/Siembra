<?php
/*$var1 = 'Enero, Octubre, Noviembre, Diciembre'; //meses en los que se puede sufrir una helada
$Var2 = 'Febrero, Marzo, Abril, Mayo'; // meses en los que se puede sembrar
$Var3 = 'Junio, Julio, Agosto, Septiembre'; //meses con mas lluvia
$Var4 = 'Más de 15°C'; //temperatura mayor no deja que la planta se desarrolle como es
$Var5 = '10°C Aprox';// temperatura ideal para que la planta crrezca correctamete
$Var6 = 'Menos de 5°C';// la planta no se puede desarrollar con esta temperatura
$Var7 = 'Temporal';
$Var8 = 'Riego';

echo "$var1, $Var2, $var3, $var4, $var5, $var6, $var7, $var8";      // imprime las variables
*/

if( isset($_GET["resul"]) ){
    $resul=($_GET['resul']);
   
   $mal="Enero, Octubre, Noviembre, Diciembre";
   $reg="Junio, Julio, Agosto, Septiembre";
   $exe="Febrero, Marzo, Abril, Mayo";
   $mal="Más de 15°C";
   $reg="10°C Aprox";
   $exe="Menos de 5°C";
		if($resul == $mal){
            print"<script>window.location='../../resultado_neg.php';</script>";
        }
        else{
           if($resul == $rel){
                print"<script>window.location='../../resultado_riesgo.php';</script>";
           }else{
                if($resul == $exe){
                    print"<script>window.location='../../resultado_positivo.php';</script>";
                }else{

                }
           }
        }
}else{
    echo 'No se han recibido datos';
}

?>


