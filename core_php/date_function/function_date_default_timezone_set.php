<?php
date_default_timezone_set("Asia/Calcutta");
echo $d=date("h-i-s a");
$t=mktime(date("h")+1,date("i"),date("s"));
echo date("h:i:s a",$t);
?>