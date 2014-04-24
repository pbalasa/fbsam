<?php

$html = @file_get_contents("http://opencartlab.com/dev/index.php?route=map/view&map=10");

echo $html;

?>