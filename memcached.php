<?php
if(class_exists('Memcached')){
    echo "Memcached is enabled.";
}else
    echo "Memcached is not enabled.";
echo "<br>";

$mc = new Memcached();

$mc->addServer("127.0.0.1", 11211);
print_r($mc->getVersion());
echo "<br><pre>";
print_r($mc->getStats());
echo "</pre><br>";
$result = $mc->get("test_key");

if($result) {
    echo $result;
    $mc->flush();
} else {
    echo "No data on Cache. Please refresh page pressing F5";
    $mc->set("test_key", "test data pulled from Cache!") or die ("<br>Failed to save data at Memcached server");
}
