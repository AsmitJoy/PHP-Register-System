<!--Header-->
<?php include 'header.php'?>

        <!--Body-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>User Login</h2>
            </div>
            <div class="panel-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input class="form-control" type="text" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="text" id="password" name="password" required>
                                </div>
                                <button class="btn btn-danger" type="submit" name="login">Login</button>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!--Footer-->
        <?php include 'footer.php'?>