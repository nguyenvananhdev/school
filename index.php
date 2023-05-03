<?php 
// Xử lý đường dẫn
    // var_dump($_SERVER);
    $url = $_SERVER['QUERY_STRING'];
    $url_s = explode('=',$url);
    $url_controller =end($url_s); 
    $url_controller_ok = explode('/',$url_controller);
    $domain = "school";
    $url_main = $_SERVER['DOCUMENT_ROOT'].'/'.$domain;

// hàm autoload để tải các class

Spl_autoload_register(function ($className){ 
    include_once ("models/".$className.".php");
});


// Kiểm tra controller đang truy cập 
    if(!$url_controller_ok[0]){
        echo 'Controller home';
    }
    else{
        if(isset($url_controller_ok[0]) && isset($url_controller_ok[1]))
        {
            if(file_exists('controllers/'.$url_controller_ok[0].'/'.$url_controller_ok[1].'.php'))
            {
                include_once('controllers/'.$url_controller_ok[0].'/'.$url_controller_ok[1].'.php');
            }
            else
            {
                include_once('controllers/errorC.php');
            }
        }
        else if($url_controller_ok[0])
        {
            if(file_exists('controllers/'.$url_controller_ok[0].'/index.php'))
            {
                include_once('controllers/'.$url_controller_ok[0].'/index.php');
            }
            else
            {
                include_once('controllers/errorC.php');
            }
        }
        else{
            include_once('controllers/errorC.php');
        }
        
    }
?>