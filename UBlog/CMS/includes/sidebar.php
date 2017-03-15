<aside class="col-lg-4">
				<form action="" class="panel-group form-horizontal" role="form">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="panel-header">
								<h4>Search</h4>
							</div>
							<div class="input-group">
								<input type="search" placeholder="Searchsomething..." class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<form action="" class="panel-group form-horizontal" role="form">
					<div class="panel panel-default">
						<div class="panel-heading">Login Area</div>
						<div class="panel-body">					
							<div class="form-group">
								<label for="username" class="control-label col-sm-4">User Name</label>
								<div class="col-sm-7">
									<input type="text" id="username" placeholder="Input Username" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="control-label col-sm-4">Password</label>
								<div class="col-sm-7">
									<input type="password" id="password" class="form-control" placeholder="Password" >
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4">
									<input type="submit" class="btn btn-success btn-block" >
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="list-group">
					<?php
					$sel_side ="SELECT * FROM posts";
					$run_side = mysqli_query($conn, $sel_side);
					while($rows = mysqli_fetch_assoc($run_side)){
						echo '<a href="post.php?post_id='.$rows['id'].'" class="list-group-item">
								<div class="col-sm-4">
									<img src="'.$rows['image'].'" alt="" width="100%">
								</div>
								<div class="col-sm-8">
										<h4 class="list-group-item-heading">'.$rows['title'].'</h4>
										<p class="list-group-item-text">'.substr($rows['description'], 0, 50).'</p>
									</div>
								<div style="clear:both;">									
								</div>
							</a>

					';
					}
					?>
					
				</div>
			</aside>