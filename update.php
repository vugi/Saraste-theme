<?php
$output = shell_exec("export PATH=~/opt/bin:$PATH; git pull 2>&1");
echo $output;
?>
