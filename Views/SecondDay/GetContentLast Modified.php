<?php
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo($i . "<br>");
    }
}
$currentFileName = basename($_SERVER['PHP_SELF']);
$fileLastModified = filemtime($currentFileName);
echo "Last modified: " . date("l, dS F, Y, h:ia", $fileLastModified) . "<br>";