<script src="/includes/js/jquery-3.2.1.min.js"></script>
	<script src="/includes/js/jquery-ui.min.js"></script>
	<script src="/includes/js/tether.min.js"></script>
	<script src="/includes/js/bootstrap.min.js"></script>
	<script>
		var url = document.location.toString();
		if (url.match('#')) {
			$('.nav-tabs a[href="#'+url.split('#')[1]+'"]').tab('show') ;
		} 
		$('.nav-tabs a').on('shown.bs.tab', function (e) {
			if(history.pushState) {
				history.pushState(null, null, e.target.hash); 
			} else {
				window.location.hash = e.target.hash;
			}
		});	
		$("#settings").draggable({
			handle: ".modal-header"
		});
		function sideToggle() {
			$("#wrapper").toggleClass("sidebar-displayed")
			$("#wrapper").toggleClass("small-sidebar-displayed")
		}
		$("#side-toggle").click(function(e) {
			e.preventDefault();
			sideToggle();
		});
		function widthBasedMenu() {
			if ($(window).width() <= 960) { 
				$("#wrapper").addClass("small-sidebar-displayed");
				$("#wrapper").removeClass("sidebar-displayed");
			}else{
				$("#wrapper").removeClass("small-sidebar-displayed");
				$("#wrapper").addClass("sidebar-displayed");
			}
		}
		window.onresize = function(event) {
			widthBasedMenu();
		};
		$(document).ready(function(){widthBasedMenu();});
	</script>