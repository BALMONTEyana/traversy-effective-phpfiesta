<?php

function hp_sum($data) {
  $sum = 0;
  foreach ($data as $row) {
    $sum += $row[5];
  }
  return $sum;
}

function ave_attack($data) {
  $sum = 0;
  $count = 0;
  foreach ($data as $row) {
    $sum += $row[6];
    $count++;
  }
  return $sum / $count;
}

$data = array (
  array("id","species","type1","type2","ability","hp","attack","defense"),
  array(1,"Bulbasaur","Grass","Poison","Overgrow",45,49,49),
  array(2,"Ivysaur","Grass","Poison","Overgrow",60,62,63),
  array(3,"Venusaur","Grass","Poison","Overgrow",80,82,83),
  array(4,"Charmander","Fire","N/A","Blaze",39,52,43),
  array(5,"Charmeleon ","Fire","N/A","Blaze",58,64,58),
  array(6,"Charizard","Fire","Flying","Blaze",78,84,78),
  array(7,"Squirtle","Water","N/A","Torrent",44,48,65),
  array(8,"Wartortle","Water","N/A","Torrent",59,63,80),
  array(9,"Blastoise","Water","N/A","Torrent",79,83,100),
  array(10,"Caterpie ","Bug","N/A","Shield Dust",50,20,55),
);

echo "Sum of HP: " . hp_sum($data);
echo "<br>";
echo "Average of Attack: " . ave_attack($data);

?>