<?php

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../blog/css/blog.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <div class="container">

            <div class="blog-header">
                <h1 class="blog-title">BUG的博客</h1>
                <p class="lead blog-description"></p>
            </div>
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">主页</a>
            <a class="blog-nav-item" href="fb.php">发表</a>
            <a class="blog-nav-item" href="lyb.php">许愿放晴</a>
            <a class="blog-nav-item" href="login.php">登录</a>
            <a class="blog-nav-item" href="zc.php">注册</a>
            <a class="blog-nav-item" href="../blog/html/lj.html">友情链接</a>
            <a class="blog-nav-item" href="../blog/html/about.html">关于</a>
        </nav>
    </div>
</div>
</div>
<div class="container">
    <div style="border-color: #81d4fa;width: 300px;height: 100px">
        <div class="form">
            <table style="...">
            <?php
            include"php/config.php";
            $sql= "select * from page order by pig limit 20";
            $res=$mySQL->query($sql);
                    while ($row=$res->fetch_array())
                    {
            ?>

                <tr>
                    <td colspan="2" style="font-size: 50px"><a href="#"><?php echo $row['title']?></a>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 25px"  colspan="2"><?php echo  $row['content']?></td>
                </tr>
                <tr>
                    <td style="..." colspan="2">作者：<?php echo $row['author']?><br>
                    <?php echo $row['intime']?>
                    </td>
                </tr>
                        <td style="margin-right: 200px"><a href="pl.php">评论</a> </td>

            <?php
            }
            ?>
            </table>
        </div>
    </div>

</div>


</body>
</html>
