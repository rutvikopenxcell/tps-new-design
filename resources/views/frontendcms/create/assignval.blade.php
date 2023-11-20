<?php 
$menuhome=$menuaboutus=$menuhowitwork=$menurewardssweep=$menumobileapp=$menucontactus=$menusociallink=$menupartnerwithus=$menulist='';
$booleanhome=$booleanaboutus=$booleanhowitwork=$booleanrewardssweep=$booleanmobileapp=$booleancontactus=$booleansociallink=$booleanpartnerwithus=$booleanmenulist='false';
if(!isset($taboption)){
$menuhome='active';
$booleanhome='true';
}else if($taboption==1){
$menuhome='active';
$booleanhome='true';
}else if($taboption==2){
$menuaboutus='active';
$booleanaboutus='true';
}else if($taboption==3){
$menuhowitwork='active';
$booleanhowitwork='true';
}else if($taboption==4){
$menurewardssweep='active';
$booleanrewardssweep='true';
}else if($taboption==5){
$menumobileapp='active';
$booleanmobileapp='true';
}else if($taboption==6){
$menucontactus='active';
$booleancontactus='true';
}else if($taboption==7){
$menusociallink='active';
$booleansociallink='true';
}else if($taboption==8){
$menupartnerwithus='active';
$booleanpartnerwithus='true';
}else{
$menuhome='active';
$booleanhome='true';
}
?>