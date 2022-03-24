<?php 
$db = mysqli_connect('localhost','root','','project-kakagung');

function query($query){
    global $db;
    $result = mysqli_query($db,$query);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function singup($data){
    global $db;

    $stambuk = mysqli_real_escape_string($db, $data['stambuk'])
    $username = strtolower(stripslashes($data['username']));
    $email = mysqli_real_escape_string($db, $data['email'])
    $password = mysqli_real_escape_string($db, $data['password']);
    $password = mysqli_real_escape_string($db, $data['password2']);

    //cek
    $result = mysqli_query($db, "SELECT stambuk FROM stambuk WHERE stambuk = '$stambuk'");
    if(mysqli_fetch_assoc($result)){
        echo"<script>
                alert('stambuk sudah terdaftar')</script>"
    }

    //cek konfirmasi password
    if( $password !== $password2){
        echo "<script>
                alert('password yang anda masukkan tidak sama!')
                </script>"
                return false;
    } 

    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //tambahkan userbaru ke database
    mysqli_query($db, "INSERT INTO akun VALUES(NULL, '$stambuk', '$username', '$email', '$password')");

    return mysqli_affected_rows($db);

}
?>