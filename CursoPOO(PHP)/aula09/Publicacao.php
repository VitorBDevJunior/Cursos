<?php
interface Publicacao {
   function abrir();
   function fechar();
   function folhear($fl);
   function avançarPag();
   function voltarPag();

}


?>