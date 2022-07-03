<?php

	$arr = array(
	array	(
			'surname' => 'surname1',
			'name'    => 'user1',
			'age'     => 25,
		),
		array(
			'surname' => 'surname2',
			'name'    => 'user2',
			'age'     => 26,
		),
	array	(
			'surname' => 'surname3',
			'name'    => 'user3',
			'age'     => 27,
		),
	);
  echo "<table style='border: 1px solid pink'>";
for ($i=0; $i <3 ; $i++) {
echo "<tr>";
echo "<td>";
echo $arr[$i]['surname'];
echo "</td>";
echo "<td>";
echo $arr[$i]['name'];
echo "</td>";
echo "<td>";
echo $arr[$i]['age'];
echo "</td>";
echo "</tr>";
}
  echo "</table >";
?>
