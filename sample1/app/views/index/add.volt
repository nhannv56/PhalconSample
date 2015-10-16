<div class="page-header">
    <h1>User management</h1>
</div>
<form method="post" action="add">
	<table>
	<tr>
		<td> <label>First name</label> </td>
		<td> {{text_field("first_name") }} </td>
	</tr>
	<tr>
		<td> <label>Last name</label> </td>
		<td> {{text_field("last_name") }} </td>
	</tr>
	<tr/>
		<td> <label>Birth day</label> </td>
		<td> {{date_field("date")}} </td>
	</tr>
	<tr>
		<td>{{submit_button("submit")}} {{link_to("/index/index/","Cancel")}}</td>
	</tr>
	</table>
</form>
</table>