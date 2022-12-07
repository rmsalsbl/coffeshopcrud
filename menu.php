<?php 
require 'function.php';

$coffemenu = query("SELECT * FROM coffemenu");
?>

<?php
// require 'function.php';

if( isset($_POST["submit"])){
    if(tambahData($_POST) > 0){
        // echo "Data berhasil ditambahkan";
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href='menu.php'
        </script>";
    }else{
        // echo "Data gagal ditambahkan";
        echo "<script>
            alert('data gagal ditambahkan');
            document.location.href='menu.php'
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="stylee.css">

</head>
<body>
<h2 class="menu-title">Menu</h2>
<!-- <header>
        <nav class="nav container">
            <img class="logo" src="img/coffee=”get”.png" alt="logo">
    
            <ul class="nav_links">
                <li><a href="#menu" class="nav-link">Menu</a></li>
                <li><a href="#addmenu" class="nav-menu">Add menu</a></li>
        </ul>
        </nav>
    </header> -->
    <!-- <h3 class="add-title">Add Coffee Menu</h3> -->
    <div class="add-menu">
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="add">
        <br>
        Coffe Name: <input type="text" name="coffename" required>
        <br>
        Price: <input type="text" name="price" required>
        <br>
        Ingredient: <input type="text" name="Ingredient" required>
        <br>
        Category: <input type="text" name="category" required>
        <br>
        Image: <input type="text" name="image" required>
        <br>
        <button type="submit" name="submit">Add Data</button>
        </div>

    
    <section class="menu" id="menu">
        <?php $i = 1 ?>
        <?php foreach($coffemenu as $row): ?>

        <div class="coffee-menu">
            <div class="menu-box">
            <img src="img/<?= $row["image"]?>" alt="" height="270" width="270">
            <div class="price">Rp.<?php echo $row["price"]?></div>
            <div class="category">Category: <?= $row["category"]?></div>
            <div class="ingredient">Ingredient : <br><?= $row["Ingredient"]?> </div>

            <div class="crud">
            <div class="ubah"><a href="">Edit</a></div>
            <div class="hapus"><a href="hapus.php?id=<?= $row["coffe_id"];?>" onclick="return confirm('Kamu yakin mau dihapus?')";>Delete</a></div>
            </div>
            </div>
        </div>

        <?php $i++ ?>
        <?php endforeach ?>
    </section>    

    

</body>

</body>
</html>