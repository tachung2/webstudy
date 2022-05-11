<?php

$conn = mysqli_connect("localhost", "tachung", "sung!8056","tachung");
$hashedPassword = password_hash($_POST['pw'], PASSWORD_DEFAULT);
echo $hashedPassword;

$sql = "INSERT INTO user(nickname, id, pw, email) VALUES('{$_POST['nickname']}', '{$_POST['id']}','{$hashedPassword}', '{$_POST['email']}')";

echo $sql;
$result = mysqli_query($conn, $sql);

if ($result == false) {
?>
    <script>
        alert("이미 존재하는 아이디가 있습니다.");
    </script>
<?php
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다.");
        location.href = "login.html";
    </script>
<?php    
}
?>