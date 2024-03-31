<?php
$array = [
  'nome' => 'Carol',
  'idade' => 16,
  'empresa' => 'lazuliz',
  'cor' => 'branco',
  'profissao' => 'confeiteira'
];
?>

<table border = "1">
  <?php foreach($array as $chave => $valor): ?>
    <tr>
        <th><?php echo $chave; ?></th>
        <td><?php echo $valor; ?></td>
    </tr>
  <?php endforeach; ?>
</table>


<?php
$array = [
  'nome' => 'Carol',
  'idade' => 16,
  'empresa' => 'lazuliz',
  'cor' => 'branco',
  'profissao' => 'confeiteira'
];
  
$chaves = array_keys($array);
$valores = array_values($array);
?>

<table border = "1">
  <tr>
      <?php foreach($chaves as $chave): ?>
          <th><?php echo $chave; ?></th>
      <?php endforeach; ?>
  </tr>
  <tr>
    
  </tr>
</table>