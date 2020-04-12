<!--Header-->
<?php include 'header.php'?>

        <!--Body-->
        <div class="panel panel-default">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h2>User profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></span></h2>
            </div>
            <div class="panel-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="name">Your name</label>
                                    <input class="form-control" type="text" id="name" name="email" value="Asmit Joy">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" id="username" name="email" value="Joy">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input class="form-control" type="text" id="email" name="email" value="aj17@gmail.com">
                                </div>
                                <button class="btn btn-danger" type="submit" name="update">Update</button>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!--Footer-->
        <?php include 'footer.php'?>