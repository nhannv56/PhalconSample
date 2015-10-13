<div class="page-header">
    <h1>User Detail</h1>
</div>
  	<li>
  	<ul><?php echo $user->id; ?></ul>
  	<ul><?php echo $user->firstname; ?></ul>
  	<ul><?php echo $user->lastname; ?></ul>
  	<ul><?php echo $user->bithday; ?></ul>
  	<ul><?php echo $user->facebook; ?></ul>
  	</li>
  	<?php echo $this->tag->linkTo(array('/index/index', 'back')); ?>