<?php
include "./head.php";
include "./generalHeader.php";
include "./registration.php";

?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 border shadow-lg">
                <div class="mt-5 mb-5 flex-column text-center">
                    <div class="mx-auto d-block">
                        <center>
                            <img src="./images/pageIcon.png" alt="Logo" style="width: 20%;" class="rounded-pill">
                        </center>
                    </div>
                    <h4>Registration form</h4>
                </div>
                <form action="./registration.php" method="post" class="mb-5 mt-5 rounded-top rounded-bottom form-group">

                    <div class="form-group">
                        <label>Enter Your Name</label>
                        <input type="text" class="form-control mb-4" placeholder="Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Username</label>
                        <input type="username" class="form-control mb-4" placeholder="Username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label>Set Password</label>
                        <input type="password" class="form-control mb-4" placeholder="Password" name="password" required>
                    </div>
                    <center>
                        <button name="register-btn" style="background-color: rgba(28, 53, 28, 0.335);" class="btn btn-block col-sm-4 btn-control">Register</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

  
</body>

</html>