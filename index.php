<!DOCTYPE html>
<html>
<head>
    <title>好好学习, 天天向上</title>
    <style type="text/css">
        h1{text-align: center;font-size: 80px;color:#FF1493;}
        div{
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding-top: 100px;
        }
        a{  
            display: flex;
            padding: 30px 60px;
            margin-right: 40px;
            color: #EEEEEE;
            font-size: 40px;
            text-decoration: none;
            border-radius: 20px;
            border:2px solid #EEEEEE;
        }
        a.plus{border:2px solid red;color:red;}
        a.plus:hover{border:2px solid red;color:white;background-color: red}

        a.reduce{border:2px solid blue;color:blue;}
        a.reduce:hover{border:2px solid blue;color:white;background-color: blue}

        a.mixed{border:2px solid green;color:green;}
        a.mixed:hover{border:2px solid green;color:white;background-color: green}
    </style>
</head>
<body>
    <h1>好好学习, 天天向上</h1>
    <div>
        <a href="plus.php" class="plus">+ 加法</a>
        <a href="reduce.php" class="reduce">- 减法</a>
        <a href="mixed.php" class="mixed">+- 加减法</a>
    </div>
</body>
</html>