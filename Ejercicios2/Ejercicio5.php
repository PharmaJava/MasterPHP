<?php


$tabla= array(
    "Accion" => array ("GTA 5", "Call Of Duty", "PUGB"),
    "Aventura" => array ("Assassins", "Crash", "POP"),
    "Deportes" => array ("FIFA 19", "PES 19", "Moto GP")
);

$categarias=  (array_keys ($tabla));



?>

<table border= ""1>

<tr>
    <?php foreach ($categarias as $categoria): ?>
    <th><?=$categoria?></th>
    <?php endforeach; ?>    
</tr>
<tr>
    <td><?=$tabla['Accion'][0]?></td>
    <td><?=$tabla['Aventura'][0]?></td>
    <td><?=$tabla['Deportes'][0]?></td>
</tr>
<tr>
    <td><?=$tabla['Accion'][1]?></td>
    <td><?=$tabla['Aventura'][1]?></td>
    <td><?=$tabla['Deportes'][1]?></td>
</tr>
<tr>
    <td><?=$tabla['Accion'][2]?></td>
    <td><?=$tabla['Aventura'][2]?></td>
    <td><?=$tabla['Deportes'][2]?></td>
</tr>

</table>