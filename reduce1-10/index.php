<!DOCTYPE html>
<html>
<head>
    <title>10以内的减法</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../web.css">
</head>
<body style="text-align: center;color:#FF1493;">
    <h1 style="font-size: 50px">✿✿✿ 10以内的减法 ✿✿✿</h1>
    <form method="post" action="" autocomplete="off">
        <ul>
            <?php 
                require('../functions.php');
                session_start();
                $all = [];

                if(!isset($_POST['ok'])){
                    unset($_SESSION['all']);
                    $_SESSION['all'] = $all = gen_reduce_expression();
                }else{
                    $all = $_SESSION['all'];
                }

                foreach ($all as $k=>$v) {
                    echo '<li>', $v['exp'];                
                    
                    if(isset($_POST['ok'])){
                        echo '<input class="num" type="text" name="',sprintf('q_%u', $k),'"
                            value="',$_POST[sprintf('q_%u', $k)],'" >';

                        if( $_POST[sprintf('q_%u', $k)] == $_POST[sprintf('a_%u', $k)]){
                            echo '<span class="right">√</span>';
                        }else{
                            echo '<span class="wrong">×</span>';
                        }
                    }else{
                        echo '<input class="num linum" type="text" name="',sprintf('q_%u', $k),'">';
                    }

                    echo '<input type="hidden" name="',sprintf('a_%u', $k),'" value="',$v['answer'],'">
                    </li>';
                }
            ?>
        </ul>
        <a class="button return" href="../"><?php echo $button_text_return;?></a>
        <input type="submit" name="ok" class="button" value="<?php echo $button_text_over;?>">
        <input type="button" name="reload" class="button reload" value="<?php echo $button_text_reload;?>" onclick="window.location=window.location.href;">
    </form>
</body>
</html>