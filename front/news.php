<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
<?php include "./front/marquee.php";?>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
<h3 class="cent">更多最新消息顯示區</h3>
<hr>
<?php
$total=$News->count(['sh'=>1]);
$div=5;
$pages=ceil($total/$div);
$now=$_GET['p']??1;
$start=($now-1)*$div;
$news=$News->all(['sh'=>1]," limit $start,$div");
foreach($news as $new){
?>

<?php
}
?>
</div>