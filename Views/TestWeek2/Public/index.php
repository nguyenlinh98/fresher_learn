<?php
require_once 'Controller\EmployeeController';

if ( isset($_GET['mod']) ) {

    switch ( $_GET['mod'] ) {

        case'employee':

            if ( $_GET['act'] ) {

                switch ( $_GET['act'] ) {
                    case 'create':
                            echo "create";
                        break;
                    case 'store':
                            echo "store";
                        break;
                    case 'index':
                            echo "index";
                        break;
                    case 'search':
                            echo "search";
                        break;
                    case 'update':
                            echo "update";
                        break;
                    default:
                            die ("The act is not exists");
                        break;
                }

            }
            break;
        default:
                die('The mod is not defined');
            break;
    }
}

