<?php
$a = shell_exec(escapeshellcmd('python verbal.py'));
$data = explode('_______________________', $a);
echo implode(",",$data);
