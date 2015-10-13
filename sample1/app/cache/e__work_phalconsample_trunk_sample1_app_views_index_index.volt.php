<center>
<div class="page-header">
    <h1>User management</h1>
</div>
<table border='1'>
  <?php foreach ($users as $user) { ?>
  	<tr>
  	<td><?php echo $user->id; ?></td>
  	<td><?php echo $this->tag->linkTo(array('index/show/' . $user->id, $user->firstname)); ?></td>
  	<td><?php echo $user->lastname; ?></td>
  	</tr>
  <?php } ?>
</table>
</center>