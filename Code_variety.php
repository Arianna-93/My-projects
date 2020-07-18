<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ES" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Repas</title>
<style type="text/css">
body {background-color: #2b7e87; color: #661a54;}
    </style>
    </head>
    <body>
    <h1>REPAS</h1>
    <br />
    <h2>Arianna Verzola </h2>
    
<div>


<?php
    
    /************* salt de línia *************/
    
   function LF(){
        print "<br />";
    }
    
    
    /************* factorial d’un número *************/
    

/*     $numero = 10;
    
    function factorial($num){
        $fact = 1;
        for ($i =1; $i <= $num; $i++){
            $fact = $fact * $i;
        }
        return $fact;
    }
    
    echo "El factorial de ".$numero." és: " .factorial($numero);
*/
    
    
    /************* factorial de l’1 al 10 *************/
    
/*    $numero = 10;
    
    function factorial($num){
        $factorial = 1;
        $n = 1;
        $i = 1;
        
        while($n <= $num){
            $factorial = $factorial * $n;
            
            $n ++;
        }
        
        return $factorial;
        
    }
    
    for ($i =1; $i <= $numero; $i++){
        
        echo "El factorial de ".$i." és: ".factorial($i);
        LF();
    }
 */

    
    
    /************* fibonacci de posició *************/
    
/*   $numero = 3;
    
    echo "Fibonacci de posició " .$numero. " es: ";
    
    function fibonacci($num){
        $fibonacci = 0;
        
        $anterior = 0 ;
        $actual = 1;
        
        for ($i =1; $i <= $num; $i++){
        
            $anterior = $actual;
            $actual = $fibonacci;
        
            $fibonacci = $anterior + $actual;
       
        }
        return $fibonacci;
        
    }
    echo  fibonacci($numero);
*/
    
 
    
    /************* fibonacci de l’1 al 10 *************/
    
/*   $numero = 10;
     
     echo "Serie de fibonacci fins la posició " .$numero. " és: ";
     
     function fibonacci($num){
     $fibonacci = 0;
     
     $anterior = 0 ;
     $actual = 1;
     
         for ($i =1; $i <= $num; $i++){
     
             $anterior = $actual;
             $actual = $fibonacci;
             
             $fibonacci = $anterior + $actual;
     
             echo " ".$fibonacci;
         }
     
    
     }
     echo  " ".fibonacci($numero)." ";
*/

    
    /************* taula de multiplicar *************/
    
 /*   $inicial = 0;
    
    function multiplicar($final){
        $final= 9;
        $actual = 2;
        
        for ($i=0; $i<=$final; $i++){
            
            $resultat = $actual * $i;
            
            echo $actual. " * ".$i." = ".$resultat;
            LF();
            
        }
        
    }
    
    echo multiplicar($inicial);
  */
    
    
    /************* taula de dividir *************/
    
/*    $inicial = 0;
    
    function dividir($final){
        $final= 5;
        $actual = 20;
        
        for ($i=1; $i<=$final; $i++){
            
            $resultat = $actual / $i;
            
            echo $actual. " / ".$i." = ".(int)$resultat;
            LF();
        }
        
    }
    
    echo dividir($inicial);
    LF();
*/
    
    
    /************* invertir lletra *************/
    
/*    $frase = "Riki";
    
    function invertir($cadena){
        
        $inicial = "i";
        $final = "8";
        $myArray = array();
        
        $long = strlen($cadena);
        $myArray = $cadena;
        
        for($i=0; $i<$long; $i++) {
            
            if ($cadena[$i]==$inicial ){
                $myArray[$i]= $final;
            }
        }
        
        return $myArray;
    }
    echo invertir($frase);
*/
  
  
    /************* invertir frase *************/
    
/*     $frase = "Hola amor";
     
     function invertir($text){
     
     $longitud = strlen($text);
     $fraseInvertida = array();
     $invertida = implode(" ", $fraseInvertida);
     $i = 0;
     
     for($i = $longitud; $i > 0; $i--){
     
     $invertida[$longitud-$i] = $text[$i-1];

     }
     
     return $invertida;
     
     }
     echo "La frase a invertir és la següent: ".$frase;
     LF();
     echo  "La frase ja invertida és la següent: ".invertir($frase);
*/
     
 
     /************* Comptar lletres *************/
    
/*    $frase = "te amo mucho";
    
    function trobar($cadena){
        
        $long = strlen($cadena);
        
        $n = 0;
        $final = 'o';
        
        for ($i=0; $i<$long; $i++){
            if($cadena[$i] == $final){
                
                $n = $n+1;
            }
            
        }
        
    print " A la cadena ".$cadena." hi ha ".$n." lletres 'o'";
    
    }
    
    echo trobar($frase);
 */

    
/************* sumar digits *************/
    
/*    $numero = "23";
    print " La suma dels digits de ".$numero." és ";
    
    function sumar($cadena){
        
        $divisor = $cadena%10;
        
        $suma = 0;
        
        while ($cadena>0){
            $suma = $suma + $divisor;
            $cadena = (int) ($cadena/10);
            $divisor = $cadena%10;
        }
        
        return $suma;
        
    }
    
    echo sumar($numero);
    
    print ", que són els anys que portem junts";
*/
    
    
    /************* mostrar *************/
    
/*  function posaImatge($param){
        echo $param;
    }
    
    function mostrarPeca($i,$j){
        $peca = array(
                      
                      array("<img src=blanco.jpg>","<img src=negro.jpg>"),
                      array("<img src=negro.jpg>","<img src=blanco.jpg>"),
                      array("<img src=blanco.jpg>","<img src=negro.jpg>"),
                      );
        
        return $peca [$i-1] [$j-1];
        
    }
    
    for ($i = 2; $i >= 1; $i--){
        
        for ($j = 1; $j <= 2; $j++){
            $peca = mostrarPeca($i, $j);

            posaImatge($peca);
        }
        
        LF();
    }
*/

    
    
    /************* mostrar intercalat *************/

/*  define ("blanco",0);
    define ("negro",1);
    
    $cadena= array(64);
    
function mostrarImatge($nomImg){
        print "<img src=".$nomImg.".jpg>";
    }
    
    
    function escacs(){
        $aux1=0;
        $aux2=1;
        $peca = array("blanco","negro");
        
        for($i = 1; $i <= 64; $i++) {
            
            if (($i%2) == 0){
                 mostrarImatge($peca[$aux1]);
            }else{
                 mostrarImatge($peca[$aux2]);
            }
            if(($i%8) == 0){
                $aux1 = !$aux1; // tuggle
                $aux2 = !$aux2;
                LF();
            }
        }
    }
    
     echo escacs();
*/

    
    /************* mitjana aritmètrica *************/
    
 $paola = array("4","4","6","7","7","4","8","10");

    function mitjana($cadena){
        
        $longitud=count($cadena);
        $suma = 0;
        $mitjana = 0;
        $nmitjana = 0;
        $xmitjana = 0;
        
        
        for ($i=0; $i<$longitud; $i++) {
            $suma= $suma + $cadena[$i];
        }
        
        $mitjana= $suma / $longitud;
        
        for ($i = 0; $i<$longitud; $i++){
            
            if ($cadena[$i] < 5.0){
                $nmitjana++;
            }
            
            if ($cadena[$i] > 5.0){
                $xmitjana++;
            }
        }
        
        print "Les notes són les següents: ".implode(" , ",$cadena);
        LF();
        print "La mitjana de les qualificacions és ".$mitjana;
        LF();
        LF();
        print "L'alumna té ".$nmitjana." suspensos";
        LF();
        print "L'alumna té ".$xmitjana." aprobats";
        
    }
    
    echo mitjana($paola);

    
    
  /************* comptar *************/
    
 /*   function comptar(){
        
    $count = 0;
    
    for ($count=0; $count<=100; $count++) {
        echo $count;
         LF();
    }
       
        LF();
    
    for ($count=100; $count>=0; $count --) {
        echo $count;
         LF();
    }
    
}
    
    echo comptar();
*/
    
    
    /************* mayúsculas *************/
     
/*   $frase = "paOla";
    
    define ("a",97);
    define ("z",122);

    function trobar($cadena){
        
        $long = strlen($cadena);
        $vector = str_split($cadena);
        
        for($i = 0; $i < $long; $i++){
            for($a = a; $a < z; $a++){
                
                if(ord($vector[$i]) == $a-32){
                    $vector[$i] = chr($a);
                    
                }else if (ord($vector[$i]) == $a){
                    $vector[$i] = chr($a-32);
                }
            }
        }
        
        return implode($vector);
        
        
    }
    
    echo trobar($frase);
*/
    
    
    /************* obtenir tupla *************/

/*  $peligrosos = array
    (
     array ("nom0" => "León"),
     array ("nom1" => "Tigre"),
     array ("nom2" => "Oso")
    );
    
    $domesticos = array
    (
    array("nom0"=>"Perro"),
    array("nom1"=>"Gato"),
    array("nom2"=>"conejo")
    );
    
    $conjunt = array($domesticos,$peligrosos);
    
    function obtenirDades($conjunto){
        
        for ( $i = 0; $i < 3; $i++){
            
             $nom = $conjunto[0][$i]["nom".$i.""];
            
            echo $nom;
            LF();
            
        }
        
        for ($i = 0; $i < 3; $i++){
            
            $nom = $conjunto[1][$i]["nom".$i.""];
            
            echo $nom;
            LF();
            
        }
    }
    
   echo obtenirDades($conjunt);
 
  */

    
    /************* obtenir tupla *************/
    
/*  $noms = array
    (
     array ("nom0" => "Javier"),
     array ("nom1" => "Juan"),
     array ("nom2" => "Eva"),
     array ("nom3" => "Marta"),
     array ("nom4" => "Jose")
    );
    
    $funcionaris = array($noms);
    
    function obtenirDades($conjunto){
        
        for ( $i = 0; $i < 5; $i++){
            
            $nom = $conjunto[0][$i]["nom".$i.""];
            
            echo $nom." ";
        }
    }
    
    echo obtenirDades($funcionaris);
    
    
    function trobarDades($cadena){
        $trobat = false;
        $i = 0;
        
        
        $llargVector = count($cadena);
        
           for ( $i = 0; $i < $llargVector; $i++){
            if($cadena == $noms[$i])
                $trobat = true;
            
        }
        
        return $trobat;
    }

 */
    
    
    

      /************* trobar lletra *************/
      
  /* revisar

   $frase = "te amo mucho Riki ";

      function trobar($cadena){
          
      $trobat = false;
      $i = 0;
          
      $long = strlen($cadena);
      $lletra = 'f';
          
      
          for($i = 0; $i < $long; $i++){
              
              if(($cadena[$i] != " ") && ($cadena[$i] == $lletra)){
                  $trobat = true;
              }
              
              return $trobat;
          }
          
          
              if (!$trobat){
                  print " hi ha lletres 'f'";
              } else {
                  print " no hi ha lletres 'f'";
              }
          
      }
      
    echo trobar($frase);
     
  revisar */
    
 
    
    
    
    // 192.168.64.2/web/Rep4s.php
    // 192.168.64.2/web/Rep4s_proba.php
    
    //Declaració de constants per a identificar el resultat
    //  define ("false",0);
    // define ("true",1);
    ?>

    </div>
    </body>
    </html>

