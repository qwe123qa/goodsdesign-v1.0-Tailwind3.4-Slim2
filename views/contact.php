<?php
require_once 'vendor/autoload.php';
require_once 'zutil/setting.php';

$_SESSION['checkPost'] = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="my-20">
		<h1 class="text-3xl text-green-400 text-center mb-10">CONTACT</h1>

		<div id="contactWrap" class="relative group">
			<div id="contactFinish" class="text-lg text-center absolute tf opacity-0 pointer-events-none group-[.is-finish]:opacity-100 group-[.is-finish]:pointer-events-auto">感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.</div>

			<form method="POST" action="javascript:;" id="contactForm" class="flex flex-col items-center gap-5 group-[.is-finish]:opacity-0 group-[.is-finish]:pointer-events-none">
				<input type="text" name="name" id="" class="border border-black">
				<input type="text" name="phone" id="" class="border border-black">
				<textarea name="message" class="border border-black h-20"></textarea>

				<input type="hidden" name="MM_insert" value="form1" />
				<button id="send" class="border rounded-xl border-black px-3 mt-4 hover:bg-black hover:text-white">submit</button>
			</form>
		</div>
	</div>
</body>

<?php include 'script.php'; ?>
</html>

<script>
	$("#send").on("click", function () {
		$("#contactForm").submit()
		$.ajax({
			type: "POST",
			url: "./contactMail.php",
			data: $("#contactForm").serialize(),
			// beforeSend: function () {
			// 	$("#ajax-loading").show();
			// },
			success: function(data) {
				$("#contactWrap").addClass("is-finish")
			}
		});
	})
</script>