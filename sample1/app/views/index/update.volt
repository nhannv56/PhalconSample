<div class="page-header">
    <h1>User management</h1>
</div>
<form method="post" action="update">
<label>Id</label>{{text_field("id","value":user.id	,"readonly":"") }}<br/>
 <label>First name</label>{{text_field("first_name","value":user.firstname) }}<br/>
 <label>Last name</label>{{text_field("last_name","value":user.lastname) }}<br/>
 <label>Birth day</label> {{date_field("date","value":user.bithday)}}<br/>
 {{submit_button("submit")}} {{link_to("/index/index/","Cancel")}}
</form>