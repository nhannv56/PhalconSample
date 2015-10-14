<center>
<div class="page-header">
    <h1>User management</h1>
</div>
<table border='1'>
<tr>
	<td>User Id</td>
	<td>First name</td>
	<td>Last name</td>
	<td>Edit</td>
	<td>Delete</td>
</tr>
  <?php foreach ($users as $user) { ?>
  	<tr>
  	<td><?php echo $user->id; ?></td>
  	<td><?php echo $this->tag->linkTo(array('/index/show/' . $user->id, $user->firstname)); ?></td>
  	<td><?php echo $user->lastname; ?></td>
  	<td> <?php echo $this->tag->linkTo(array('/index/update/' . $user->id, 'update')); ?></td>
  	<td><?php echo $this->tag->linkTo(array('/index/delete/' . $user->id, 'delete')); ?></td>
  	</tr>
  <?php } ?>
</table>
<?php echo $this->tag->linkTo(array('/index/add/', 'new')); ?>
</center>