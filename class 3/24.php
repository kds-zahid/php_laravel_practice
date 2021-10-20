<?php
echo "<b>File link: </b>".__FILE__ ."\n <br>";
echo "<b>File base link: </b>".basename(__FILE__)."\n <br>";
echo "<b>File directory link: </b>".dirname(__FILE__);

file_put_contents('test_class_24.txt',fopen('24.php','r'),FILE_APPEND);