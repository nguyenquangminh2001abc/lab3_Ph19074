<?php

     namespace App\Controllers;
     use App\Controllers\BaseController ;
     
     class DashboardController extends BaseController {
        function showDashBoard(){
           $viewName = ".dashboard";
           $this->render($viewName,[]);
        }
     }

?>