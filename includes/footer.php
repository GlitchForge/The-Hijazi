<footer class="app-footer">
	<div class="container text-center py-3">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
				style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com"
				target="_blank">Usmani & Team</a> for Our Beloved Ummah</small>

	</div>
</footer><!--//app-footer-->

</div><!--//app-wrapper-->


<!-- Javascript -->
<script src="assets/plugins/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Page Specific JS -->
<script src="assets/js/app.js"></script>

<script>
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>

<script>
	function updateTime() {
		var date = new Date();
		var options = { timeZone: 'Asia/Kolkata' };
		var time = date.toLocaleTimeString('en-US', options);
		document.getElementById("clock").innerHTML = time;
	}
	setInterval(updateTime, 1000);
</script>

</body>

</html>