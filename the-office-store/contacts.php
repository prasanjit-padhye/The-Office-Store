<?php
$lines = file('contacts.txt');

foreach ($lines as $line_num => $line) {
    echo "<br />\n" . htmlspecialchars($line) . "<br /><br />\n";
}

?>