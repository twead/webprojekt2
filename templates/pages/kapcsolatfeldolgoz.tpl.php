<!-- Kapcsolat felvétel -->

	<?php if(isset($uzenet)) { ?>
		
		<?php if($ujra) { ?>
			<h1 class="alert-danger text-center">Az üzenetet nem sikerült elküldeni!</h1>
			<h2 class="text-center"><?php echo $uzenet; ?></h2>
			<p class="text-center"><a href="?page=contact" >Próbálja újra!</a></p>
	<?php }else{ ?><h1 class="alert-success text-center">Az üzenetet sikeresen elküdte!</h2> 
	<?php }} ?>
