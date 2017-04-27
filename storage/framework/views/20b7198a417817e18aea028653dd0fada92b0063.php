<?php if(Session::has('msj-exito')): ?>
<div id="mensaje-success">
	<div class="alert alert-dismissible alert-success">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  <span class="glyphicon glyphicon-ok" aria-hidden="true" style="color: rgb(0,0,0)"></span>
	  <strong style="color: rgb(0,0,0)"><?php echo e(Session::get('msj-exito')); ?></strong> 
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function()
	{
		setTimeout(function()
		{
			$("#mensaje-success").fadeOut(5000, function () 
			{
				$("#mensaje-success").remove();
			});
		}, 2000);
	});
</script>
<?php endif; ?>
