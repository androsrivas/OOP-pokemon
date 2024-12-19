<?php

include_once('classes/classes.php');

$pokemon1 = new Pokemon("CHARMANDER", Type::fire, 4, 8.5, 0.6);
$moves_p1 = array("GROWL", "EMBER", "SCRATCH", "SMOKESCREEN");
for ($i = 0; $i < 4; $i++) {
    $pokemon1->learnMove($moves_p1[$i]);
}
echo '<pre>' . var_export($pokemon1->get_name(), true) . '</pre>';
echo '<pre>' . var_export($pokemon1->get_moves(), true) . '</pre>';


$pokemon2 = new Pokemon("SANDSHREW", Type::earth, 27, 12.0, 0.6);
$moves_p2 = array("POISON STING", "SAND ATTACK", "SCRATCH", "FURY CUTTER");
for ($i = 0; $i < 4; $i++) {
    $pokemon2->learnMove($moves_p2[$i]);
}
echo '<pre>' . var_export($pokemon2->get_name(), true) . '</pre>';
echo '<pre>' . var_export($pokemon2->get_moves(), true) . '</pre>';

$pokemon3 = new Pokemon("VOLTORB", Type::electric, 100, 10.4, 0.5);
$moves_p3 = array("THUNDER SHOCK", "SELF-DESTRUCT", "LIGHT SCREEN", "CHARGE BEAM");
for ($i = 0; $i < 4; $i++) {
    $pokemon3->learnMove($moves_p3[$i]);
}
echo '<pre>' . var_export($pokemon3->get_name(), true) . '</pre>';
echo '<pre>' . var_export($pokemon3->get_moves(), true) . '</pre>';

$pokemon4 = new Pokemon("NINETALES", Type::fire, 38, 19.9, 1.1);
$moves_p4 = array("FIRE BLAST", "NASTY PLOT", "CONFUSE RAY", "GRUDGE");
for ($i = 0; $i < 4; $i++) {
    $pokemon4->learnMove($moves_p4[$i]);
}
echo '<pre>' . var_export($pokemon4->get_name(), true) . '</pre>';
echo '<pre>' . var_export($pokemon4->get_moves(), true) . '</pre>';

$pokemon5 = new Pokemon("HORSEA", Type::water, 116, 8.0, 0.4);
$moves_p5 = array("FOCUS ENERGY", "DRAGON BREATH", "BUBBLE BEAM", "HYDRO PUMP");
for ($i = 0; $i < 4; $i++) {
    $pokemon5->learnMove($moves_p5[$i]);
}
echo '<pre>' . var_export($pokemon5->get_name(), true) . '</pre>';
echo '<pre>' . var_export($pokemon5->get_moves(), true) . '</pre>';

$pokemon6 = new Pokemon("VULPIX", Type::fire, 37, 9.9, 0.6);
$moves_p6 = array("TAIL WHIP", "QUICK ATTACK", "EMBER", "INCINERATE");
for ($i = 0; $i < 4; $i++) {
    $pokemon6->learnMove($moves_p6[$i]);
}
echo '<pre>' . var_export($pokemon6->get_name(), true) . '</pre>';
echo '<pre>' . var_export($pokemon6->get_moves(), true) . '</pre>';

$myTeam = new Team(array($pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6));
$myTeam->select_pokemon(Type::fire);

?>