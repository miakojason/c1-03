<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<?php include "./front/marquee.php"; ?>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
	<h3 class="cent">更多最新消息顯示區</h3>
	<hr>
	<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
	<?php
	$total = $News->count(['sh' => 1]);
	$div = 5;
	$pages = ceil($total / $div);
	$now = $_GET['p'] ?? 1;
	$start = ($now - 1) * $div;
	$news = $News->all(['sh' => 1], " limit $start,$div");
	?>
	<ol class="ssaa" start="<?= $start + 1; ?>">
		<?php
		foreach ($news as $new) {
		?>
			<li>
				<div><?= mb_substr($new['text'], 0, 20); ?>...</div>
				<div class="all" style="display:none"><?= $new['text']; ?></div>
			</li>
		<?php
		}
		?>
	</ol>
	<div class="cent">
		<?php
		if ($now > 1) {
			$prev = $now - 1;
			echo "<a href='?do=$do&p=$prev'><</a>";
		}
		for ($i = 1; $i <= $pages; $i++) {
			$fontsize = ($now == $i) ? '24px' : '16px';
			echo "<a href='?do=$do&p=$i'>$i</a>";
		}
		if ($now < $pages) {
			$next = $now - 1;
			echo "<a href='?do=$do&p=$next'>></a>";
		}
		?>
	</div>
</div>
<script>
	$(".ssaa li").hover(
		function() {
			$("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
			$("#altt").show()
		}
	)
	$(".ssaa li").mouseout(
		function() {
			$("#altt").hide()
		}
	)
</script>