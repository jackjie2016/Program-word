<?php 

 
// ���� memcached ���ļ� 
include('memcached-client.php'); 
echo 'ddddddd';
die;

// ѡ������ 
$options = array( 
'servers' => array('10.169.216.146:11211'), //memcached ����ĵ�ַ���˿ڣ����ö������Ԫ�ر�ʾ��� memcached ���� 
'debug' => true, //�Ƿ�� debug 
'compress_threshold' => 10240, //���������ֽڵ�����ʱ����ѹ�� 
'persistant' => false //�Ƿ�ʹ�ó־����� 
); 
// ���� memcached ����ʵ�� 
$mc = new memcached($options); 
// ���ô˽ű�ʹ�õ�Ψһ��ʶ�� 
$key = 'mykey'; 
// �� memcached ��д����� 
$mc->add($key, 'some random strings'); 
$val = $mc->get($key); 
echo "n".str_pad('$mc->add() ', 60, '_')."n"; 
var_dump($val); 
// �滻��д��Ķ�������ֵ 
$mc->replace($key, array('some'=>'haha', 'array'=>'xxx')); 
$val = $mc->get($key); 
echo "n".str_pad('$mc->replace() ', 60, '_')."n"; 
var_dump($val); 
// ɾ�� memcached �еĶ��� 
$mc->delete($key); 
$val = $mc->get($key); 
echo "n".str_pad('$mc->delete() ', 60, '_')."n"; 
var_dump($val); 
?> 