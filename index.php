<?php
require_once('global.php');   require_once ('header.php');  
if(isset($_GET["clear"])   ) {  session_destroy(); $cleared =TRUE; 
echo '<h3>تم تسجيل الخروج </h3>'
. ' <META http-equiv="refresh" content="1;URL=./index.php">  ';   }  
if(isset( $_GET["did"] )   ) {   dlete_post($_GET["did"]);    dlete_acc($_GET["did"]);  }  
if(isset( $_GET["dpost"] )   ) {  dlete_post($_GET["dpost"]);    }  

 ?>
 <h1 class="signal cntr">الحسابات</h1>     
 <div class="usrlst">     
 <?php  $users= getu_sers(0)  ;   
 foreach ($users as $v) {   
 $scnm= str_replace(" ","",$v['screen_name']);
 echo '<div class="accounts">
 <a id="uslnk" title="رابط الحساب" target="_blank" href="https://twitter.com/'.$scnm.'"></a>';
 echo '<input type="text"  name="'.$scnm.'" value="@'.$scnm.'" id='.$v['user_id'].'  />';  
 echo '<a class="dlete" title="حذف الحساب" id="'.$v['user_id'].'" href="index.php?did='.$v['user_id'].'"   onclick="return confirm_click();" > </a>';   
  echo '<a class="zero" title="حذف كل التغريدات" id="'.$v['user_id'].'" href="index.php?dpost='.$v['user_id'].'"   onclick="return confirm_click();" > </a>';   

 echo '</div>';
  }  
?> 
</div> 
<div class="cntr">
 <a class="zero" title="حذف كل التغريدات" id="0" href="index.php?dpost=0" onclick="return confirm_click();" >
حذف كل التغريدات</a>

 <a class="dlete" title="حذف كل الحسابات" id="0" href="index.php?did=0" onclick="return confirm_click();" >
حذف كل الحسابات 
</a>
</div>    

<p class="cntr">
<a class="tw" href="https://twitter.com/login" target="_blank">Twitter-login</a>
<a class="tw" href="https://apps.twitter.com/" target="_blank">apps.twitter</a>
  <a class="lo"  href="index.php?clear">تسجيل خروج </a>
 </p>
 <?php  Footer();?> 