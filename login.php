<?php 
include("header.php");
include("navbar.php");
?>

<div class="container mt-3">
    <div class="row">
        <div class="col"><!-- 1st Column Registration form -->
            <div class="card">
                <div class="card-header"><h4>Login</h4></div>
                <div class="card-body">
                <form action="/action_page.php">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        <label for="pwd">Password</label>
                    </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                </form>
                </div>
            </div>
        </div>

        <div class="col"><!-- 2st Column Image Infor -->
            <img src="images/infoImage.png" alt="infoImage" style="width: 350px">
        </div>
    </div>
</div>

<?php 
include("footer.php");
?>