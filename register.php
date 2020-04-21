<!--Header-->
<?php include 'header.php';
 include 'User.php';

    $user = new User();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
        $userRegi = $user->userRegistration($_POST);
    }
     
?>

        <!--Body-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>User Registration</h2>
            </div>
            
            <div class="panel-body">
            <?php
                if (isset($userRegi)) {
                    echo $userRegi;
                }
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="name">Your name</label>
                                    <input class="form-control" type="text" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" id="username" name="username" >
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input class="form-control" type="text" id="email" name="email" >
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="text" id="password" name="password" >
                                </div>
                                <button class="btn btn-danger" type="submit" name="register">Submit</button>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!--Footer-->
        <?php include 'footer.php'?>