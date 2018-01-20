<?php
/**
 Smarty 插件
 -----------------------------------------------------------
 文件： function.eightball.php
 类型： function
 名称： eightball
 目标： 输出一个随机的奇秒答案
 {* 在模板中使用eightball函数标签:*}  
问题: 我能有时间旅行吗?  
答案: {eightball}.  
 ----------------------------------------------------------- */
function smarty_function_eightball($params, $smarty) {
    $answers = array(
            '是的',
            '不行',
            '没门儿',
            '看起来不好',
            '再回答一次',
            '根据情况决定'
    );
    $result = array_rand($answers);
    return  $params['a'].$answers[$result];
}