<?php
$m=new Memcached();
$m->addServer('10.169.216.146',11211);
print_r($m->getVersion());
?>