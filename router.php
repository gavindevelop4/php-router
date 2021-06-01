<?php
    $lang = explode("/",parse_url($_SERVER['REQUEST_URI'])["path"])[1];
    
    $langArray = array("tc","en");
    $defaultLang = "en";
    if (!in_array($lang,$langArray)) {
        header('Location: /'.$defaultLang.'/');
        exit;
    }
    $url = $_SERVER['REQUEST_URI'];
    
    $routeArr = explode("/".$lang."/",$url);
    $routeWithPara = end($routeArr);
    $routePara = explode("?",$routeWithPara);
    $route = current($routePara);
    if (substr($route, -1) == "/") {
        $route = substr_replace($route ,"",-1);
        header('Location: /'.$defaultLang.'/'.$route);
        exit;
    }
    
    $file = "";
    $js = "";
    $page = "";
    if ($route == "") {
        $file = "index.php";
        $js = "index.js";
        $page = "index";    
    } else if ($route == $lang ){
        header('Location: /'.$lang.'/');
        exit;
    } else {
        $file = $route.".php";
        $js = $route.".js";
        $page = implode(" ",explode("/",$route));
    }

    if (!file_exists("./view/".$file)):
        header('Location: /'.$lang.'/');
        exit;
    endif;
    
    include("./lang/".$lang."/common.php");
    include("./lang/".$lang."/".$file);
?>