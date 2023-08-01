<?php 
    if (empty($_POST['name'])) {
        echo 'Введите имя';
    } elseif (empty($_POST['tel'])) {
        echo 'Укажите телефон';
    } elseif (empty($_POST['email'])) {
        echo 'Укажите почту';
    } elseif (!preg_match ('/[\.a-z0-9_\-]+[@][a-z0-9_\-]+([.][a-z0-9_\-]+)+[a-z]{1,4}/i', $_POST['email'])){
        echo 'Некорректная почта';
    } elseif (empty($_POST['text'])) {
        echo 'Укажите текст заявки';
    } else {
        echo 'ok';
        $arr = [$_POST['name'], $_POST['tel'], $_POST['email'], $_POST['text']];
        $str = implode(',', $arr);
        file_put_contents('data.txt', $str. PHP_EOL, FILE_APPEND);
    }
?>