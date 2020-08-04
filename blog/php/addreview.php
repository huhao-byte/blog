<?php
session_start();
?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$username=$_POST['username'];
$content=$_POST['content'];
$search = array('vpn','傻逼','艹','滚','<','>','script','<?php','#','alert','||','`','屏蔽词');
function test($str , $array_search){
    foreach($array_search as $value){
        if(strstr($str , $value)!==false){
            echo "<script>alert('含有敏感词或字符，请重新输入');location='../lyb.php'</script>";
            return true;
        }
    }

    return false;
}
//使用方法
$test = test($username,$search);
$test2 = test($content,$search);

if ($test==false&&$test2==false){
    if ($username==""){
        echo "<script>alert('名字不能为空哦');location='../pl.php'</script>";
    }else{
        if ($content==""){
         echo "<script>alert('内容不能为空哦');location='../pl.php'</script>";
        }else{
            echo $content;
        include "config.php";
$sql="insert into review(username, content) VALUES ('$username','$content')";
$res=$mySQL->query($sql);

echo "<script>alert('评论成功');location='../pl.php'</script>";
        }
    }
}

?>


