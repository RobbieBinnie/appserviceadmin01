<?php

echo "<h1>hello authenticated people!</h1>";
echo "this is where you should order...<br/>";

echo $_SERVER['X-MS-CLIENT-PRINCIPAL-NAME'];

echo "<br/><br/>";


foreach (getallheaders() as $name => $value) {
    echo "$name: $value <br/>";
}



?>
