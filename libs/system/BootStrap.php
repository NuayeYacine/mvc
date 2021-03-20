<?php
    namespace libs\system;
    
    class BootStrap
    {
        public function __construct()
        {
            if(isset($_GET["url"]))
            {
                $url = explode("/", $_GET["url"]);
                
                $controller_file = "src/controller/".$url[0]."Controller.php";
                if(file_exists($controller_file))
                {
                    require_once $controller_file;
                    $files = $url[0]."Controller";
                    $controller_objet = new $files();
                    if(isset($url[2]))
                    {
                       $method = $url[1];
                       if(method_exists($controller_objet, $method))
                       {
                        $controller_objet->$method($url[2]);
                       }else{
                            die($method." n'existe pas dans le controlleur ".$files);
                       } 
                    }
                    else if(isset($url[1]))
                    {
                       $method = $url[1];
                       if(method_exists($controller_objet, $method))
                       {
                        $controller_objet->$method();
                       }else{
                            die($method." n'existe pas dans le controlleur ".$files);
                       }    
                    }
                }else{
                    die($controller_file." n'existe pas");
                }
            }else {
                echo "MVC";
            }
        }
    }
?>