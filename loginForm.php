<?php
include "./head.php";
include "./generalHeader.php";
?>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 border shadow-lg">
                <div class="mt-5 mb-5 flex-column text-center">
                    <div class="mx-auto d-block">
                        <center>
                            <img src="./images/pageIcon.png" alt="Logo" style="width: 20%;" class="rounded-pill">
                        </center>
                    </div>
                    <h4>Login</h4>

                </div>
                <form action="./login.php" method="post" class="mb-5 mt-5 rounded-top rounded-bottom">
                    <div class="form-group">
                        <label>Enter Your Username</label>
                        <input type="username" class="form-control mb-4" placeholder="Username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label>Enter Your Password</label>
                        <input type="password" class="form-control mb-4" placeholder="Password" name="password" required>
                    </div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <center>
                                    <button style="background-color: rgba(28, 53, 28, 0.335);" class="btn btn-block col-sm-4 btn-control">Login</button>
                                </center>
                            </div>
                            <div class="col-sm-6 d-flex">
                                <p class="float-right">Don't have an account?</p>
                                <a href="register.php" class="signin">Register</a>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>