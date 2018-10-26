
<footer class="bg-dark text-white p-3">
    <div class="container">
	<div class="d-flex flex-wrap flex-row justify-content-between">
	<p class="m-0">AR Collection &copy 2018</p>
	<div>
		<a href="<?php echo ADMIN_URL; ?>" class="text-white">Admin</a>
		<!-- <a href="#" class="text-white">Contact Us</a> -->
	</div>
	</div>
	
	</div>
</footer>

<script src="<?php echo BASEURL; ?>js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo BASEURL; ?>js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="<?php echo BASEURL; ?>js/script.js" type="text/javascript" ></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.min.js" type="text/javascript"></script>    
    <script src="<?php echo BASEURL; ?>js/popper.min.js" ></script>
	
	
	<script>
	
		function detailsmodal(id) {
			var data = {"id" : id};
			// send data to detailsmodal.php
			jQuery.ajax({
				url		: '/TermProject/includes/detailsmodal.php',
				method	: "post",
				data	: data,
				success	: function(data){
					jQuery('body').append(data);
					jQuery('#details-modal').modal('toggle');
				},
				error	: function(){
					alert("Something went wrong!");
				}
			});
		}

		function getItemID(id) {
			var data = {"id" : id};
			// send data to detailsmodal.php
			jQuery.ajax({
				url		: '/TermProject/includes/detailsmodal.php',
				method	: "post",
				data	: data,
				success	: function(data){
					jQuery('body').append(data);
					jQuery('#details-modal').modal('toggle');
				},
				error	: function(){
					alert("Something went wrong!");
				}
			});
		}
	</script>

</body>
</html>