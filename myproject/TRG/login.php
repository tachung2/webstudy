<?php

$conn = mysqli_connect("localhost", "tachung", "sung!8056","tachung");
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM user WHERE id = '{$id}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$hashedPassword = $row['pw'];
$row['id'];

foreach($row as $key => $r) {
    echo "{$key} : {$r} <br>";
}

$passwordResult = password_verify($pw, $hashedPassword);
if ($passwordResult == true) {
    session_start();
    $_SESSION['userid'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['userid'];

?>
    <script>
        location.href = "index.php";
    </script>
<?php
} else {
?>
    <script>
        alert("아이디나 비밀번호가 틀렸습니다.");
        history.back();
    </script>
<?php
}
?>