<?php include 'includes/admin_header.php'; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/admin_navigation.php'; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small>Author</small>
                        </h1>
                        <?php 
                            if(isset($_POST['submit'])) {
                                $cat_title = $_POST['cat_title'];
                                if($cat_title == "" || empty($cat_title)) {
                                    echo "<h5 style='color:red'> * This Field Should not be Empty</h5>";
                                }
                                else {
                                    $query = "insert into categories(cat_title) values('$cat_title')";
                                    $create_category_query = mysqli_query($connection, $query);
                                    if(!$create_category_query) {
                                        die("Operation Failed - ".mysqli_error($connection));
                                    }
                                }
                            }
                        ?>

                        <div class="col-xs-6">
                            <form action="" method="post">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Category Name" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-6">
                            <?php 
                                $query = "select * from categories";
                                $categories= mysqli_query($connection, $query);
                            ?> 
                            <table class="table table-bordered table-hover">
                                <thead>  
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($row = mysqli_fetch_assoc($categories)) {
                                            $cat_title = $row['cat_title'];
                                            $cat_id = $row['cat_id'];
                                            echo "<tr><td>{$cat_id}</td><td>{$cat_title}</td></tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'includes/admin_footer.php'; ?>


