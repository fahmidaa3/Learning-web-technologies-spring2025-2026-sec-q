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
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Welcome <?php echo $user['name']; ?> (<?php echo $user['type']; ?>)</h2>

<p style="text-align:center;">
    <a href="../logout.php">Logout</a>
</p>

<hr>


<?php if($user['type']=='admin'){ ?>
<div class="container">
<form method="POST" action="../controller/productController.php">
    <input name="pname" placeholder="Product Name" required>
    <button name="add">Add Product</button>
</form>
</div>
<?php } ?>

<h3>Product List</h3>

<?php foreach($products as $k=>$p){ ?>

<div class="product-box">

    <h4><?php echo $p['name']; ?></h4>

  
    <?php if($user['type']=='admin'){ ?>
        <a href="../controller/productController.php?delete=<?php echo $k;?>">Delete</a>
    <?php } ?>

    <?php if($user['type']=='customer'){ ?>
        <form method="POST" action="../controller/productController.php">
            <input type="hidden" name="id" value="<?php echo $k;?>">
            <input name="newname" placeholder="New Name">
            <button name="update">Edit</button>
        </form>
    <?php } ?>

</div>

<?php } ?>

</body>
</html>