<?php

require '../conf/conf.php';


require FIWO_ROOT . '/resources/SystemManager.php';

$sysM = new SystemManager();
echo $sysM->getInfo();


echo '<br /><br /><a href="index.php">Back</a>';
