<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="<?php echo $this->Xyz->home();?>" class="brand">Bhagat Singh</a>
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav">
					<li class="active">
						<a href="<?php echo $this->Xyz->home();?>">Home</a>
					</li>
					<li>
						<a href="<?php echo $this->Xyz->u('images', 'all');?>">Gallery</a>
					</li>
					<li>
						<a href="#submitArticle" class="article-call" role="button" data-toggle="modal" >Submit Article</a>
					</li>
					<li>
						<a href="<?php echo $this->Xyz->u('article', 'finalHour');?>" role="button" >Article From Users</a>
					</li>
					<li class="dropdown">
						 <a data-toggle="dropdown" class="dropdown-toggle" href="#">Quotes<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo $this->Xyz->u( 'quotes' ); ?> ">Read</a>
							</li>
							<li>
								<a href="<?php echo $this->Xyz->u( 'quotes', 'add' ); ?> ">Add</a>
							</li>
						</ul>
					</li>
					<!--
					<li class="dropdown">
						 <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li class="nav-header">
								Nav header
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
							<li>
								<a href="#">One more separated link</a>
							</li>
						</ul>
					</li>
					-->
				</ul>
				<!--
				<ul class="nav pull-right">
					<li>
						<a href="#">Link</a>
					</li>
					<li class="divider-vertical">
					</li>
					<li class="dropdown">
						 <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</li>
				</ul>
				-->
			</div>
			
		</div>
	</div>

	</div>
