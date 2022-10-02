<?php

require'database/connect.php';
if(isset($_POST['btn-reg'])){
    
    
    $fullname=$_POST['fullname'];
    $password=$_POST['password'];
    $email=$_POST['email'];
   
    // kiem tra du lieu co bi trong hay khong:
    if(!empty($fullname)&&!empty($password)&&!empty($email))
    {
        
        $sql="INSERT INTO`customer`(`fullname`,`password`,`email`)VALUES('$fullname',md5('$password'),'$email')";

        if($conn->query($sql)===TRUE){
            echo "Đăng kí thành công";
        }else{
            echo "Loi{$sql}".$conn->error;
        }
    }else{
        echo "ban can nhap day du thong tin truoc khi dang ki";
    }

}
// echo"<pre>";
// print_r($_POST);
?>