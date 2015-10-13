<center>
<div class="page-header">
    <h1>User management</h1>
</div>
<table border='1'>
  {% for user in users %}
  	<tr>
  	<td>{{user.id}}</td>
  	<td>{{link_to("index/show/"~user.id,user.firstname)}}</td>
  	<td>{{user.lastname}}</td>
  	</tr>
  {% endfor %}
</table>
</center>