<!doctype html>

<?php
include('../dbcon/dbcon.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $row = mysqli_query($conn, $query);
    $check = mysqli_num_rows($row);

    try {
        if (mysqli_num_rows($row) > 0) {
            while ($rows = mysqli_fetch_assoc($row)) {
                $_SESSION['user'] = $rows["id"];
                session_start();
            }
        } else {
            echo "no match";
        }
    } catch (exception $e) {
        echo mysqli_error();
    }
  
}
?>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="carousel slide" id="demo" data-ride="carousel" data-interval="4500">
            <div class="carousel-header d-flex justify-content-around align-items-center">
                <h1 class="align-self-start">icndy</h1>
                <nav class="navbar navbar-expand-md navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-link">
                                <a href="#Products">Products</a>
                            </li>
                            <li class="nav-link">
                                <a href="#">Cart</a>
                            </li>
                            <li class="nav-link">
                                <button class="btn btn-primary logout" type="submit">Log out</button>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/admin images/street-photography-traffic.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="../images/admin images/street-photography-fruit.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="../images/admin images/street-photography-food.jpg" alt="">
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href=#demo data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href=#demo data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </div>

    <div class="container-fluid d-flex justify-content-center-align-items-center flex-wrap" id="Products">

        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr class="text-uppercase">
                    <th>Product name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>
                    <th>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add new
                            Product</button>
                    </th>
                </tr>
            </thead>
            <tbody id="load-items">
                
            </tbody>
        </table>

    </div class="container">
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add new Item</h4>
                    <button type="submit" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="../includes/functions.inc.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="product-name">Product name</label>
                            <input type="text" class="form-control" placeholder="Product name" id="product-name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="product-name">Image</label>
                            <input type="file" class="form-control" placeholder="Image" id="img" name="image">
                        </div>
                        <div class="form-group">
                            <label for="product-name">Price</label>
                            <input type="text" class="form-control" placeholder="Price" id="price" name="price">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary add" name="submit">Add</button>
                            <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    </div>

    <script src="../js/admin.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>