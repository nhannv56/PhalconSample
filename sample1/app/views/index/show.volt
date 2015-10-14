<div class="page-header">
    <h1>User Detail</h1>
</div>
  	<ul>
  	<li>ID: {{user.id}}</li>
  	<li>First Name: {{user.firstname}}</li>
  	<li>Last Name: {{user.lastname}}</li>
  	<li>Bithday: {{user.bithday}}</li>
  	<li>Facebook: {{user.facebook}}</li>
  	</ul>
  	{{ link_to("/index/index","back")}}