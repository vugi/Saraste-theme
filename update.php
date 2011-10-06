<?php
if(shell_exec("git status") == ""){
	$output = shell_exec("~/opt/bin/git pull 2>&1");
} else{
	$output = shell_exec("git pull 2>&1");
}
echo $output;
?>