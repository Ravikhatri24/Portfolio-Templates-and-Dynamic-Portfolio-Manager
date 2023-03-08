<?php include("connection.php");
?>
<?php include("header.php");
?>
<body>

    <div class="background" style="position:relative">
        <div class="panel">
            <i class="far fa-user fa-3x" style="color:white"></i>
            <br><br>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input class="form-control " type="email" name="email" id="" required="" placeholder="Email id">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="pass" id="" required=""
                        placeholder="Password"><br>
                </div>
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="submit">
                            <button class="btn" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include("footer.php");
?>