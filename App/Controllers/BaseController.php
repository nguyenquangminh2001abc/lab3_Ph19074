<?php
  
  namespace App\Controllers;
  use eftec\bladeone\BladeOne;

  class BaseController{

    // hàm phục vụ hiển thị theo kiểu mới sử dụng bladeOne
    // render (tên file , dữ liệu)
    // tên file là tiền tố của file view : post.blade.php -> post 
    // dữ liệu sẽ có dạng mảng

    public function render($viewName,$data){
     
    $views = './App/views';
    $cache = './cache';
    $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
    echo $blade->run($viewName,$data); // it calls mvc-oop/App/Views/$viewName.blade.php 
   }
  }



?>