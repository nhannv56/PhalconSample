<div class="page-header">
    <h1>User management</h1>
</div>
<form method="post" action="update">
	<table>
		<tr>
			<td> <label>Id</label> </td>
			<td> {{ text_field("id","value":user.id	,"readonly":"") }}</td>
			<br/>
		</tr>
		<tr>
			<td><label>First name</label></td>
			<td>{{text_field("first_name","value":user.firstname) }}</td>
			<br/>
		</tr>
		<tr>
			<td> <label>Last name</label> </td>
			<td> {{text_field("last_name","value":user.lastname) }}</td>
			<br/>
		</tr>
		<tr>
			<td> <label>Birth day</label></td>
			<td> {{date_field("date","value":user.bithday)}}</td>
			<br/>
		</tr>
		<tr>
			<td> {{submit_button("submit")}} {{link_to("/index/index/","Cancel")}} </td>
		</tr>
	</table>
</form>