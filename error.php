<?php 
// Check if there is error at the newuser_start page
if (count($error) > 0) :  ?>
	<div class="alert alert-danger" role="alert">
		<?php foreach ($error as $errors) : ?>
			<p><?php echo $errors ?> </p>
		<?php endforeach ?>
	</div>
<?php endif ?>