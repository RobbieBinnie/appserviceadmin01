<?php

echo "<h1>hello authenticated people!</h1>";
echo "this is where you should order...";

//echo $_SERVER['REMOTE_USER'];

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}



?>
