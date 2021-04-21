<?php

    /**
     * 算术生成器
     */

    /**
     * 加法
     */
    function gen_plus_expression()
    {
        for ($i=1; $i < 10; $i++) { 
            for ($j=1; $j <= (10-$i); $j++) { 
                $all[] = [
                    'exp' => sprintf('%2u + %2u =', $i, $j),
                    'answer' => ($i+$j),
                ]; 
            }
        }
        shuffle($all);
        return array_slice($all, 0, 10);
    }

    /**
     * 减法
     */
    function gen_reduce_expression()
    {
        for ($i=1; $i <= 10; $i++) { 
            for ($j=1; $j <= $i; $j++) { 
                $all[] = [
                    'exp' => sprintf('%2u - %2u =', $i, $j),
                    'answer' => ($i-$j),
                ]; 
            }
        }
        shuffle($all);
        return array_slice($all, 0, 10);
    }


    /**
     * 混合加减法
     */
    function gen_mixed_expression()
    {
        $plus = gen_plus_expression();
        $reduce = gen_reduce_expression();

        //$all = [...$plus, ...$reduce];
        $all = $plus+ $reduce;
        shuffle($all);
        return array_slice($all, 0, 10);
    }


    $button_text_return = '←选题';
    $button_text_over = '做完了☪';
    $button_text_reload = '出新题☆';