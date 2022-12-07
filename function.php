<?php
//koneksi ke database
//paramater (host, username admin, password, name database)
$conn = mysqli_connect("localhost", "root", "", "coffe");
function query($query){
    global $conn;
    //ambil data di database
    $result = mysqli_query($conn , $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
    
}

function tambahData($data){
    global $conn;
    // $coffe_id = htmlspecialchars($data["idcoffe"]);
    $coffename = htmlspecialchars($data["coffename"]);
    $price = htmlspecialchars($data["price"]);
    $Ingredient = htmlspecialchars($data["Ingredient"]);
    $category = htmlspecialchars($data["category"]);
    $image = htmlspecialchars($data["image"]);

    $query = "INSERT INTO coffemenu VALUES('', '$coffename', '$price', '$Ingredient', '$category', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapusData($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM coffemenu WHERE coffe_id = $id");

    return mysqli_affected_rows($conn);
}

?>