<?php
$canshu=$_SERVER["QUERY_STRING"];
if($canshu=="")
 {
 die("文件不存在");
 }
else
{
$wangzhi="http://pan.baidu.com/share/link?".$canshu;
$file=file_get_contents($wangzhi);
$pattern='/a><a class="new-dbtn" hidefocus="true" href=(.*?)id="downFileButtom">/i';
preg_match_all($pattern,$file,$result); 
$tempurl=implode("",$result[1]);
$fileurlt=str_replace("\"","",$tempurl);
$fileurl=str_replace("&amp;","&",$fileurlt);
header("location:$fileurl");
}
?>
