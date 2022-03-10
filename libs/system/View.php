<?php
    namespace libs\system;
    class View {
        public function __construct()
        {
            $num=\func_num_args();
            $args-\func_get_args();

            switch ($num) {
                case '1':
                   $file="view/".$args[0].".php";
                   if(\file_exists($file))
                   {
                       require_once $file;
                   }else
                   {
                       die($file."n'existe pas");
                   }
                    break;
                case '2':
                    $file="view/".$args[0].".php";
                    if(\file_exists($file))
                    {
                        $data=$args[0];
                        require_once $file;
                    }else
                    {
                        die($file."n'existe pas");
                    }
                     break;
                
                default:
                    # code...
                    break;
            }
        }
    }
?>