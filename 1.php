<?php
$num= mt_rand(1,4);
echo $num."<hr>";
if($num<4){
$type="view";
}else{  
$type="click";
}
$type="click";
//$type="test";
//$timebase=round(40*(1+mt_rand(1,200)/100));
$timebase=mt_rand(10,40);
//$timebase=1;
    $hour = date("H"); 
    //$hour=13;
    if($hour>12 && $hour<19 ){
        $timer=1*$timebase;
    }else if($hour==12 || $hour==19 ){
        $timer=2*$timebase;
    }else{
        $timer=$timebase;
    }
    echo $timer;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8" />

    <style>
      #wait {
        display: none;
        background-color: salmon;
        width: 100px;
        height: 100px;
      }
    </style>
  </head>

  <body onload="clock(<?php echo $timer;?>)">
      <a id="idd"><?php echo time();?></a>
      <a id="type"><?php echo $type;?></a>
      <p id="clock"></p>
      
    <div id="wait">Some content here</div>
<script language='javascript' type='text/javascript'>

function clock(times){

//页面加载时设置需要倒计时的秒数，计算小时

var shi=parseInt(times/3600);

//计算分钟

var fen=parseInt((times%3600)/60);

//计算秒

var miao=(times%3600)%60;

//写入页面显示

document.getElementById("clock").innerHTML=shi+"时"+fen+"分"+miao+"秒";

if(times>0){

//倒计时的秒数递减1

times=times-1;

//定时1秒，然后调用自身clock方法

//每次递减1，不停调用自身，实现循环，直到times=0

setTimeout(function (){

clock(times);

}, 1000);

} }

const el = document.getElementById('wait');

setTimeout(() => {
  el.style.display = 'block';
}, <?php echo $timer;?>000); // 👈️ delay in milliseconds



</script>
  </body>
</html>

