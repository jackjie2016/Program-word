 

<?php
 
echo 'pc2';
 
//测试session读取是否正常 
session_start(); 
 


//从Memcache中读取session 
$m = new Memcache(); 
$m->connect('10.169.216.146', 11211); 
//或者这样 
//$mem->addServer("127.0.0.1", 11211) or die ("Can't add Memcache server 127.0.0.1:12000"); 

//根据session_id获取数据 

//本机 
//$session = $m->get(session_id()); //session_id：d527b6f983bd5e941f9fff318a31206b 

//另一台服务器，已知session id 
$session = $m->get("uv2ta87tiog6gd5jf417mkm3k1"); 
 
echo $session."<br/>";
 //会得到这样的数据：username|s:16:"pandao";，解析一下就可以得到相应的值了 
echo session_id()."<br/>"; 
 
 
?>