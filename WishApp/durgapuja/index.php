<?php include("includes/php/createWish.php");
    include("includes/php/indexHeader.php");
    if(!empty($_GET['message'])) {
        $message = $_GET['message'];
        echo '<h3 style="color:red; text-align:center">'.$message.'</h3>';
    }
?>

<br />
<br/>
<div class="col-md-6 col-lg-5 col-sm-8 center-block well login-form reg">
    <div class="createh1">
        <h2 class="text-center">Create Your Own Wishing Page</h2>
    </div>
    <hr/>
    <marquee height="40px">
        <p style="color:red"> <strong>Send your wishing page link to others to wish them with your name on it</strong> </p>
    </marquee>
    <div class="clearfix">&nbsp;</div>
    <form method="post" class="form-horizontal" data-parsley-validate>
        <div class="form-group createbutton">
            <input type="text" class="form-control" name="title" placeholder="Enter Your Name" data-parsley-required="true"/>
        </div>
        <div class="form-group">
            <input type="submit" name="create" class="btn btn-success btn-block btn-lg" value="Create Wish" />
        </div>
    </form>
    </div>
</div>
<div class="clearfix">&nbsp;</div>



<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.5.1/parsley.min.js"></script>


<?php include("includes/php/footer.php") ?>