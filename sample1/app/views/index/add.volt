<div class="page-header">
    <h1>User management</h1>
</div>
<form method="post" action="add">
 <label>First name</label>{{text_field("first_name") }}<br/>
 <label>Last name</label>{{text_field("last_name") }}<br/>
 <label>Birth day</label> {{date_field("date")}}<br/>
 {{submit_button("submit")}} {{link_to("/index/index/","Cancel")}}
</form>
</table>