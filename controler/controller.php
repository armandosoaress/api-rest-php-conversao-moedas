<?php
   	$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
       $url = array_filter(explode('/', $url));
       
        //////REAL PARA DOLAR//////////
       if ($url[1]=='BRL' && $url[2]=='USD') {
          $total = $url[0] * $url[3];
          $sm ='USD $';
       }
       //////FIM REAL PARA DOLAR//////////
   
       //////DOLAR PARA REAL//////////
       if ($url[1]=='USD' && $url[2]=='BRL') {
           $total = $url[0] / $url[3];
           $sm ='USD $';
        }
       //////FIM DOLAR PARA REAL//////////
   
          //////REAL PARA EURO//////////
          if ($url[1]=='BRL' && $url[2]=='EUR') {
           $total = $url[0] * $url[3];
           $sm ='EUR €';
        }
        //////FIM REAL PARA DOLAR//////////
    
        //////EURO PARA REAL//////////
        if ($url[1]=='EUR' && $url[2]=='BRL') {
            $total = $url[0] / $url[3];
            $sm ='EUR €';
         }
        //////FIM DOLAR PARA REAL//////////
   
       $data = array(
           "valorConvertido" => $total,
           "simboloMoeda" => $sm
          );
          
?>
