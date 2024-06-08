<?php
$url = "https://e04c5101-8888-49c8-b5bb-2ad84ef79597-00-29zgeynuj5px1.riker.replit.dev/";
$data = file_get_contents($url);
if ($data !== false) {
    echo "Data fetched successfully:\n";
    echo $data;
} else {
    echo "Failed to fetch data from $url";
}
?>
