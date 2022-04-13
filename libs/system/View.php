<?php
   namespace libs\system;
   //require_once '../../config/autoload.php';
    class View {
        public function __construct()
        {
            
        }

        public function load()
        {
            $num=func_num_args();
            $args=func_get_args();
            
            switch ($num) {
               
                case '1':
                    echo 2;
                   $file="src/views/".$args[0].".php";
                   if(file_exists($file))
                   {
                    echo 3;
                       require_once $file;
                   }else
                   {
                       die($file." n'existe pas comme vue");
                   }
                    break;
                case '2':
                    $file="src/views/".$args[0].".php";
                    if(file_exists($file))
                    {
                        $data=$args[1];
                        require_once $file;
                    }else
                    {
                        die($file." n'existe pas");
                    }
                     break;
                
                default:
                    # code...
                    break;
            }
        }
    }
?>