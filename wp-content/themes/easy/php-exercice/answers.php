<?php

// Display
$string = "first string";
$numbers = "110918";
$special = "special\"character";
if ($string == "first string") $string = "second string";
$concat = $string.$numbers.$special;

// Loops
$i=0;
while ($i<=10) {
	echo $i++;
}

for ($i=0 ; $i<=10 ; $i++) {
	echo $i;
}

function while_loop () {
	$i=0;
	while ($i<=10) {
		echo $i++;
	}
}
while_loop();

function while_loop_max(int $max = 10) {
	$i=0;
	while ($i<$max) {
		echo $i++;
	}
}
while_loop_max(20);

// Arrays
function display_elements($array) {
	$notes=implode(",",$array);
	echo $notes;
}

function average_value($array) {
	$averagenote = array_sum($array) / count($array);
	echo $averagenote;
}

function more_than_ten($array) {
	$count = 0;
	foreach ($array as $note) {
		if ($note >= 10) $count++;
	}
	echo $count;
}

function twenty($array) {
	if (max($array) == 20) return true;
	else return false;
}

function best_note($array) {
	return max($array);
}