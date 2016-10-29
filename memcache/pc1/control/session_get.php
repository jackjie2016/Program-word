<?php  
$m=new Memcache();
$m->addServer('10.169.216.146',11211);
print_r($m->getVersion());


print_r($m->get("dlceqpq95ckemfb2cd9iblo8d0"));



?> 