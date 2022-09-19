<?php
$a = shell_exec(escapeshellcmd('python ../../../public/python/verbal.py'));
        $kita = explode('_______________________', $a);
        echo $kita[1];
