<?php
    $con = mysqli_connect("localhost","root","");//链接数据库
    if(!$con){
        die("can't cionnect".mysqli_error());//如果链接失败输出错误
    }
    
    mysqli_select_db($con,"test");//选择数据库（我的是test）
    if($con) {
      echo 'link ok';
    }else {
      echo 'error';
    }
?>