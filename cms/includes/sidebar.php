<div class="col-md-4">

	<!-- Blog Search Well -->
	<div class="well">
		<h4>Blog Search</h4>
		<form action="./search.php" method="post">
			<div class="input-group">
				<input type="text" class="form-control" name="search"> <span
					class="input-group-btn">
					<button class="btn btn-default" type="submit" name="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
		<!-- /.input-group -->
	</div>

	<!-- Blog Categories Well -->
	<div class="well">
	<?php 
		include "db.php";
		$query = "select * from categories LIMIT 4";
		$categories_sidebar= mysqli_query($connection, $query);
	?>  
		<h4>Blog Categories</h4>
		<div class="row">
			<div class="col-lg-12">
				<ul class="list-unstyled">
					<?php
						while ($row = mysqli_fetch_assoc($categories_sidebar)) {
							$cat_title = $row['cat_title'];
							echo "<li><a href='#'>{$cat_title}</a></li>";
						}
					?>
				</ul>
			</div>
		</div>
		<!-- /.row -->
	</div>

	<!-- Side Widget Well -->
	<?php include 'widget.php'; ?>

</div>