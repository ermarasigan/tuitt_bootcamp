<!-- Header partial for Menu page -->

<nav id="menu-header" class="navbar navbar-default row navbar-fixed-top" >
    <div class="container-fluid">
    	<div class="navbar-header ">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span> 
      		</button>
      		<a id="menu-brand" class="navbar-brand" href="#">
      			ördertaker
      		</a>
    	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
	      	<ul class="nav navbar-nav navbar-right">
	      		<li>
					<a id="menu-user" href="#" data-toggle="modal" data-target="#update_modal">
					<!-- <a id="menu-user" href="#" data-toggle="popover" data-placement="bottom"
					title="Account update/delete"
					data-content="Will be enabled in upcoming patch"> -->
						<span class="glyphicon glyphicon-user"></span> 
						<?php
							if ($_SESSION != null){ 
								echo $_SESSION['username'];
							} else {
								echo "Please log in";
							}
						?>
					</a>
				</li>
	        	
	        	<li>
	        		<?php if ($_SESSION != null) {
	        			echo '<a id="menu-logout" href="#" data-toggle="modal" data-target="#logout_modal">';
	        			echo '<form method="POST" action ="">';
	        				 
		        				echo '<button type="submit" name="logout">';
		        				echo '<span class="glyphicon glyphicon-log-out"></span>';
		        				echo 'Log out';
		        				echo '</button>';
		        				
						echo '</form>';
	        			echo '</a>';
	        		} else {
	        			echo '<form id="menu-home" action="" method="POST">';
	        			echo '<button type="submit" name="home">';
	        			echo '<span class="glyphicon glyphicon-log-out"></span>';
                		echo 'Home';
              			echo '</button>';
              			echo '</form>';
	        			} 
	        		?>
	        	</li>
	      	</ul>
    	</div>
	</div>
</nav>