<?php
include 'getData.php';
include 'rollDice.php';











echo "<form method='get'>";
echo "<ul>";
echo"<li>1<input type=radio name=dice value=1></li>";
echo"<li>2<input type=radio name=dice value=2></li>";
echo"<li>3<input type=radio name=dice value=3></li>";
echo "<input type = submit name=roll value=Roll>";
echo "</ul>";
echo "</form>";


?>
