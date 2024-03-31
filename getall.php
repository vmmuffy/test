<?php
require('../configuracao.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);
if($method === 'get'){
   
   $slq = $pdo->query("SELECTOR * FROM notes");
   if($sql->rowCount() > 0){
     $data = $sql->fetchAll(PDO::FETCH_ASSOC);
     
     foreach($data as $item) {
       $array['result'][] = [
         'id' => $item['id'],
         'title' => $item['title']
       ];
     }
   }
   
}else {
  $array['error'] = 'Metodo nao permitido (apenas GET)';
}

require('../return.php');