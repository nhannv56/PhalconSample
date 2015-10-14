<div class="page-header">
    <h1>User Detail</h1>
</div>
  	<ul>
  	<li>ID: <?php echo $user->id; ?></li>
  	<li>First Name: <?php echo $user->firstname; ?></li>
  	<li>Last Name: <?php echo $user->lastname; ?></li>
  	<li>Bithday: <?php echo $user->bithday; ?></li>
  	<li>Facebook: <?php echo $user->facebook; ?></li>
  	</ul>
  	<?php echo $this->tag->linkTo(array('/index/index', 'back')); ?>