<?php

require_once('./data/bootstrap.php');
///////////////////////////////////////////
//Bảo vệ nhưng có vẻ dư thừa
if(!isset($admincpok)){ header("location: index.php"); chmt(0,'index.php'); exit;}
//KT
/////////////////////////////////////////////

echo Registry::get('top');

///////////////////////////////////////////////////////////////////////////////
//Công cụ GET
///////////////////////////////////////////////////////////////////////////////
$act = @$_GET['act'];

if(file_exists('data/tools/'.$act.'.php'))
{
require_once('data/tools/functions.php');
$surl = './tools.php?';

require_once('data/tools/'.$act.'.php');
}
else{


echo'

'.tieude("Quản lí tệp tin").'
<img src="data/vtr/icon/php.png" alt=""/> <a href="index.php"><font color=red>Quản lí file với Gmanager</font></a><br/> 
'.tieude("Quản lí CSDL").'
<img src="data/vtr/img/pma.png" alt=""/>  <a href="tools.php?act=sql"><font color=red>Quản lí MySQL (cũ)</font></a><br/> 
<img src="data/vtr/img/pma.png" alt=""/>  <a href="saoluu/index.php"><font color=red>Quản lí MySQL 2 (mới)</font></a><br/> 
<img src="data/vtr/icon/sql.png" alt=""/>  <a href="tools.php?act=saoluu"><font color=red>Sao lưu SQL</font></a><br/>
'.tieude("Mã hóa dữ liệu").'
<img src="data/vtr/img/key.png" alt=""/>  <a href="tools.php?act=encode">Mã Hóa tổng hợp</a><br/> 
<img src="data/vtr/img/pass.png" alt=""/>  <a href="tools.php?act=md5">Mã Hóa MD5 nhiều lần</a><br/> 
'.tieude("Công cụ tổng hợp").'
<img src="data/vtr/icon/php.png" alt=""/> <a href="tools.php?act=eval">Chạy thử code PHP</a> | <a href="change.php?go=eval&c=./">2</a><br/> 
<img src="data/vtr/img/Info.png" alt=""/> <a href="tools.php?act=phpinfo">Thông tin PHP</a><br/> 
<img src="data/vtr/icon/htm.png" alt=""/> <a href="tools.php?act=html">Chạy thử HTML/CSS</a><br/> 
<img src="data/vtr/icon/css.png" alt=""/> <a href="tools.php?act=mamau">Mã màu html</a><br/> 
<img src="data/vtr/icon/exe.png" alt=""/>  <a href="change.php?go=cmd&c=./">Chạy lệnh CMD</a> <br/> 
<img src="data/vtr/icon/sql.png" alt=""/>   <a href="change.php?go=mysql&c=./">Chạy lệnh MySQL</a><br/> 
<img src="data/vtr/img/cpanel.png" alt=""/>   <a href="change.php?go=sqlite&c=./">Chạy lệnh MySQLite</a><br/> 
<img src="data/vtr/img/pma.png" alt=""/>   <a href="change.php?go=sql_installer&c=./">Tạo cài đặt MySQL</a><br/> 
<img src="data/vtr/img/next.gif" alt=""/>   <a href="change.php?go=scan&c=./">Máy Quét Header URL</a><br/> 
<img src="data/vtr/img/Email.png" alt=""/>   <a href="change.php?go=send_mail&c=./">Gửi E-Mail</a><br/> ';

}


echo Registry::get('foot');
