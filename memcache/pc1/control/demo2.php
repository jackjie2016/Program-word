<?php
ini_set('session.save_handler', 'memcache');
ini_set('session.cookie_domain','www.7in6.com');
ini_set('session.save_path','tcp://10.169.216.146:11211?persistent=1&weight=1&timeout=1&retry_interval=15'); 
session_start();
if (!isset($_SESSION['session_time'])) {   
 $_SESSION['session_time'] = time();
}
echo "session_time:".$_SESSION['session_time']."<br />";
echo "now_time:".time()."<br />";
echo "session_id:".session_id()."<br />";
?> 