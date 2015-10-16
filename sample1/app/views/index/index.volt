<div class="page-header">
    <h1>List of users</h1>
</div>
<table border='1'>
<tr>
	<td>User Id</td>
	<td>First name</td>
	<td>Last name</td>
	<td>Edit</td>
	<td>Delete</td>
</tr>
  {% for user in users %}
  	<tr>
  	<td>{{user.id}}</td>
  	<td>{{link_to("/index/show/"~user.id,user.firstname)}}</td>
  	<td>{{user.lastname}}</td>
  	<td> {{link_to("/index/update/"~user.id,"update")}}</td>
  	<td>{{link_to("/index/delete/"~user.id,"delete")}}</td>
  	</tr>
  {% endfor %}
</table>
{{link_to("/index/add/","Add")}}