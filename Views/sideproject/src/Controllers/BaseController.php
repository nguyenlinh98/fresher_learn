<?php
namespace App\Controllers;

use mysql_xdevapi\Exception;

abstract class BaseController
{
    /**
     * @param $ViewName
     * @param string $paramname
     * @param array $param
     */
    protected function render($ViewName, $paramName = '', $param = [])
    {
        $$paramName = $param;

        $file_src = "../src/Views/$ViewName.php";
        try {
            if( !file_exists($file_src) )
            {
                throw new \Exception("The view file isn't exitsts");

            }

        } catch(\Exception $e) {
            die( $e->getMessage() );
        }

        include("../src/Views/$ViewName.php");

    }

}