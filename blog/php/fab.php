<?php

error_reporting(E_ALL & ~E_NOTICE);
$title= $_POST['title'];
$content= $_POST['content'];
$author= $_POST['author'];
$intime= $_POST['intime'];
$search = array('vpn','傻逼','艹','滚','<','>','script','<?php','#','alert','||','`','屏蔽词');
function test($str , $array_search){
    foreach($array_search as $value){
       if(strstr($str , $value)!==false){
       	 echo "<script>alert('含有敏感词或字符，请重新输入');location='../blog/fb.php'</script>";
           return true;
       }
    }

    return false;
}
//使用方法
$test = test($title,$search);
$test2 = test($content,$search);
$test3 = test($author,$search);

if($test==false&&$test2==false&&$test3==false){
if($author==""){
	echo "<script>alert('昵称不能为空哦');location='../fb.php'</script>";
}else{
    if ($title==""){
        echo "<script>alert('标题不能为空哦');location='../fb.php'</script>";
    }else{
	if($content==""){
	echo "<script>alert('主要内容不能为空哦');location='../fb.php'</script>";
}else{
	echo $comment;
	}
include"config.php";
$sql="insert into page(title,content,author) values('$title','$content','$author')";
$res=$mySQL->query($sql);

echo "<script>alert('提交成功');location='../index.php'</script>";
}

}
}

?>

