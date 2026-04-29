<?php
include('../config/session.php');
include('../model/productModel.php');

if(!isset($_SESSION['current_user'])){
    header("Location: login.php");
    exit();
}

$user = $_SESSION['current_user'];
$products = getProducts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Welcome <?php echo $user['name']; ?> (<?php echo $user['type']; ?>)</h2>

<p style="text-align:center;">
    <a href="../logout.php">Logout</a>
</p>

<hr>

<!-- ADMIN ADD BOX -->
<?php if($user['type']=='admin'){ ?>
<div class="container">
<form method="POST" action="../controller/productController.php">
    <input type="text" name="pname" placeholder="Product Name" required>
    <button name="add">Add Product</button>
</form>
</div>
<?php } ?>

<h3>Product List</h3>

<!-- PRODUCT LIST -->
<?php foreach($products as $p){ ?>
<div class="product-box">

    <h4><?php echo $p['name']; ?></h4>

    <!-- DELETE -->
    <?php if($user['type']=='admin'){ ?>
        <a href="../controller/productController.php?delete=<?php echo $p['id']; ?>">Delete</a>
    <?php } ?>

    <!-- UPDATE -->
    <?php if($user['type']=='customer'){ ?>
        <form method="POST" action="../controller/productController.php">
            <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
            <input type="text" name="newname" placeholder="New Name">
            <button name="update">Edit</button>
        </form>
    <?php } ?>

</div>
<?php } ?>

</body>
</html>