<?php 
// Xử lý đường dẫn  
    $url = $_SERVER['REQUEST_URI'];
    $url_controller = explode('/',$url);
    var_dump($url_controller);
// Kiểm tra controller đang truy cập 
    if(!$url_controller[2]){
        echo 'Controller home';
    }
    else{
        if(file_exists('controllers/'.$url_controller[2].'.php')){
            echo 'Controller tồn tại';
        }
        else{
            echo 'Controller tồn tại';
        }
    }
    

?>