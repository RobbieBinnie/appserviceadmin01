<?php

echo "<h1>hello authenticated people!</h1>";
echo "this is where you should do admin stuff...<br/>";

echo $_SERVER['X-MS-CLIENT-PRINCIPAL-NAME'];

echo "<br/><br/>";


foreach (getallheaders() as $name => $value) {
    if ($name == "X-MS-CLIENT-PRINCIPAL-NAME"){
        echo "hello, $value i can see your datas in my directory <br/>";
    }
}



?>
