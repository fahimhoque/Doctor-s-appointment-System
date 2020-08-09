<!DOCTYPE html>
<html>
<head>
	<title>Patient Dashboard</title>
</head>
<body>
	<div class="layout">
  		<div class="layout__container">
    		<div class="layout__container-before"></div>

    		<!-- BEGIN sidebar -->
		    <aside class="sidebar">
			      <div class="sidebar__header">
			        	<a href="#">Logo</a>
			      </div>
			      <div class="sidebar__content">
				        <ul class="sidebar__content-menu">
					        <li><a href="#">Category 1</a></li>
					          	<li class="sidebar--active"><a href="#">Category 2</a></li>
					          	<li><a href="#">Categoryem 3</a></li>
					          	<li><a href="#">Category 4</a></li>
					          	<li class="sidebar--active">
					            <ul>
					              	<li><a href="#">Category 5</a></li>
					              	<li><a href="#">Category 5.1</a></li>
					              	<li><a href="#">Category 5.2</a></li>
					            </ul>
					        </li>
				        </ul>
			      </div>
		    </aside>
    		<!--  //END sidebar -->
    
    <!-- BEGIN main -->
    <main class="main">

      <div class="main__header">
        <div class="main__header-heading">
          <h1>Dashboard</h1>
        </div>
        
        <div class="main__header-user">
          <button type="button" class="main__header-user-toggle" data-toggle="dropdown" data-toggle-for="user-menu" role="button">
            <span class="main__header-user-toggle-picture">
              <img src="holder.js/40x40/thumb" alt="">
            </span>
          </button>
          <div class="main__header-user-menu" id="user-menu">
            <div class="main__header-user-menu-header">
              <span>Username</span>
            </div>
            <ul class="main__header-user-menu-content">
              <li><a href="#"><i class="icon icon--dashboard"></i>Dashboard</a></li>
              <li><a href="#"><i class="icon icon--profile"></i>My profile</a></li>
              <li><a href="#"><i class="icon icon--settings"></i>Settings</a></li>
              <li><a href="#"><i class="icon icon--help"></i>Help center</a></li>
              <li><a href="#"><i class="icon icon--sign-out"></i>Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
    
      <div class="main__content">
          <h2>Subheading</h2>
          <div class="items-holder"></div>

          <h2>Subheading 2</h2>
          <div class="items-holder"></div>

          <h2>Subheading 3</h2>
          <div class="items-holder"></div>
      </div>
  </main>
  <!--  //END main -->
    
  <div class="layout__container-after"></div>

  <script id="list-template" type="text/x-handlebars-template">
    <div class="items">
      <div class="items__inner">
        <ul class="items__inner-header">
          <li><h3>Heading 1</h3></li>
          <li><h3>Heading 2</h3></li>
          <li><h3>Heading 3</h3></li>
          <li><h3>Heading 4</h3></li>
          <li class="items__inner-header--action"></li>
        </ul>
        {{#each items}}
        <ul class="items__inner-content">
          <li>Item 1</li>
          <li>Item 1</li>
          <li>Item 1</li>
          <li>Item 2</li>
          <li class="items__inner-content--action">
            <button><span>Action</span></button>
          </li>
        </ul>
        {{/each}}
      </div>
  </script>
    
</div> 
</body>
</html>