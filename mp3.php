<?php
$canshu=$_SERVER["QUERY_STRING"];
$wangzhi="http://pan.baidu.com/share/link?".$canshu;
$file=file_get_contents($wangzhi);
$pattern='/<a class="dbtn cancel b-fr" href=(.*?)id="downFileButtom">/is';
preg_match_all($pattern,$file,$result);
$tempurl=implode("",$result[1]);
$fileurlt=str_replace("\"","",$tempurl);
$fileurl=str_replace("&amp;","&",$fileurlt);
header("location:$fileurl")
?>