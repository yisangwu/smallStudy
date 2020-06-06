<!DOCTYPE html>
<html>
<head>
    <title>10以内的加减法</title>
    <meta charset="utf-8">
    <style type="text/css">
        ul{display: flex;flex-direction: row; flex-wrap: wrap;margin: 0 auto;    justify-content: center;}
        li{list-style-type: none; display: flex;margin: 10px;font-size: 39px;letter-spacing: 10px;margin-right: 50px}
        .right{color: green;}
        .wrong{color: red;}
        .num{line-height: 40px;font-size: 30px;color: blue;width: 150px}
        .linum{margin-right: 30px}
        .button {
            margin-top: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 20px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 36px;
            border-radius: 15px;
            cursor:pointer
        }
        .reload{background-color:#FF1493;}
    </style>
</head>
<body style="text-align: center;color:#FF1493;">
    <h1 style="font-size: 50px">✿✿✿ 10以内的加减法 ✿✿✿</h1>
    <form method="post" action="" autocomplete="off">
        <ul>
            <?php 
                require('functions.php');
                session_start();
                $all = [];

                if(!isset($_POST['ok'])){
                    unset($_SESSION['all']);
                    $_SESSION['all'] = $all = gen_mixed_expression();
                }else{
                    $all = $_SESSION['all'];
                }

                foreach ($all as $k=>$v) {
                    echo '<li>', $v['exp'];                
                    
                    if(isset($_POST['ok'])){
                        echo '<input class="num" type="text" name="',sprintf('%u_q', $k),'"
                            value="',$_POST[sprintf('%u_q', $k)],'" >';

                        if( $_POST[sprintf('%u_q', $k)] == $_POST[sprintf('%u_a', $k)]){
                            echo '<span class="right">√</span>';
                        }else{
                            echo '<span class="wrong">×</span>';
                        }
                    }else{
                        echo '<input class="num linum" type="text" name="',sprintf('%u_q', $k),'">';
                    }

                    echo '<input type="hidden" name="',sprintf('%u_a', $k),'" value="',$v['answer'],'">
                    </li>';
                }
            ?>
        </ul>
        <input type="submit" name="ok" class="button" value="做完了☪">
        <input type="button" name="reload" class="button reload" value="再做一次☆" onclick="window.location=window.location.href;">
    </form>
</body>
</html>