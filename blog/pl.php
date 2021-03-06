<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>评论
    </title>

    <style type="text/css">

        .images{
            margin-left: 50px;
            position:absolute;
            z-index: -1;
        }
        .form{
            position:absolute;
            width: 400px;
            height: 350px;
            background-color: #FFDD99;
            margin-left: 510px;
            margin-top: 300px;
            border-radius: 30px;
            box-shadow: #ccc 0px 0px 5px;
        }
        .top_font{
            margin-top: 2.5%;
            margin-left: 5%;
            margin-right: 5%;
        }
        .button{
            background-color: #f44336;
            border: none;
            color: white;
            padding: 8px 12px;
            text-align: center;
            font-size: 15px;
            border-radius: 8px;
            display:block;
            margin:0 auto;
            margin-top: 2.5%;
        }
        .form_main{
            margin-left: 5%;
            margin-right: 5%;
        }
        textarea{
            resize: none;
            width: 353px;
            height: 45px;
        }
        .comment{
            position: absolute;
            margin-top: 680px;
            width: 845px;
            margin-left: 50px;
            border-radius: 15px;
            background-color: #FFDD99;
            margin-bottom: 20px;
            padding: 10px;
    </style>
</head>
<body>
<div style="width: 100px;">
    <div class="images">
        <img src="images/bj.jpg" width="900px" height="650px;">
    </div>
    <div class="form">
        <div class="top_font">

		<span style="font-size: 15px;">谢谢你，带来的评论
		</span>
        </div>
        <div class="form_main">
            <form action="php/addreview.php" method="post" id="main_form">

                <table>
                    <tr>
                        <td width="200px;"><span style="font-weight: 900px; font-size: 15px;">昵称:</span></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="username" style="width: 150px; height: 20px;">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">内容<span style="font-size:12px; color: red;">*必填</span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="content" style="width: 353px; height: 20px;" placeholder="请在此处输入评论"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><input type="submit" name="" value="评论" class="button"></td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
</div>
<div class="comment">
    <div style="margin: 10px;">
        <h1>大家的评论：</h1>
    </div>
    <?php
    include"php/config.php";
    $sql="select * from review order by id desc limit 10";
    $res=$mySQL->query($sql);
    while($row=$res->fetch_array())
    {
        ?>
        <table style="margin: 15px;">
            <tr>
                <td colspan="2" style="font-size: 18px;"><?php echo $row['username']?></td>

            </tr>
            <tr>
                <td style="font-size: 15px;" colspan="2"><?php echo $row['content']?></td>
            </tr>
            <tr>
                <td style="font-size: 15px;" colspan="2"><?php echo $row['intime']?></td>
            </tr>
        </table>
        <?php
    }
    $sql2="select count(*) from review";
    $res2=$mySQL->query($sql2);
    $row2=$res2->fetch_array()
    ?>
    <span style="margin: 15px; color: #f50057">已有<?php echo $row2['count(*)']?>人评论</span>
</div>

</body>
</html>
