<?php
      namespace App\Controllers;
      use App\Controllers\BaseController ;
      use App\Models\Product ;
     
      class ProductController extends BaseController {

            public function getProduct(){
                // hiển thị danh sách sản phẩm bằng render của bladeOne 
                
                $viewName = 'product.index';
                $data = [
                    'product' => [
                        ['id' => 1 , 'name' => 'iphone 14' , 'price' => 14000000 , 'color' => "vàng" , 'quantity' => 100, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14prm-vang.jpg"],
                        ['id' => 2 , 'name' => 'iphone 13' , 'price' => 11000000 , 'color' =>"trắng" , 'quantity' => 140, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14prm-trawngs.jpg"],
                        ['id' => 3 , 'name' => 'iphone 12' , 'price' => 9000000 , 'color' => "đen" , 'quantity' => 150, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14-prm-den.jpg" ]
                    ]
                ];
                return $this->render($viewName,$data) ;
            }

            public function detailProduct()
            {
                $id_pro = $_GET['id_pro'];
                $viewName = 'product.details';
                $data = [
                    'product' => [
                        ['id' => 1 , 'name' => 'iphone 14' , 'price' => 14000000 , 'color' => "vàng" , 'quantity' => 100, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14prm-vang.jpg"],
                        ['id' => 2 , 'name' => 'iphone 13' , 'price' => 11000000 , 'color' =>"trắng" , 'quantity' => 140, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14prm-trawngs.jpg"],
                        ['id' => 3 , 'name' => 'iphone 12' , 'price' => 9000000 , 'color' => "đen" , 'quantity' => 150, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14-prm-den.jpg" ]
                    ]
                ];

                $details_pro ;
                foreach($data['product'] as $data)
                {
                    if($data['id'] == $id_pro)
                    {
                        $details_pro = [ 'product' => [ $data] ] ;
                    }
                };

                return $this->render($viewName,$details_pro) ;
                
            }

            public function addProduct()
            {
                $name = $_POST['name_pro'];
                $price = $_POST['price_pro'];
                $color = $_POST['color_pro'];
                $quantity = $_POST['quantity_pro'];
                $image = $_POST['image_pro'];
                if($name !== "" && $price !== "" && $color !== "" && $quantity !== "" && $image !== "")
                {
                $viewName = 'product.index' ;
                $data = [
                    'product' => [
                        ['id' => 1 , 'name' => 'iphone 14' , 'price' => 14000000 , 'color' => "vàng" , 'quantity' => 100, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14prm-vang.jpg"],
                        ['id' => 2 , 'name' => 'iphone 13' , 'price' => 11000000 , 'color' =>"trắng" , 'quantity' => 140, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14prm-trawngs.jpg"],
                        ['id' => 3 , 'name' => 'iphone 12' , 'price' => 9000000 , 'color' => "đen" , 'quantity' => 150, 'image'=> "https://www.techone.vn/wp-content/uploads/2022/09/14-prm-den.jpg" ] 
                        
                    ]
                  ];
        
                  $data['product'][] = ['id'=>count($data['product']+1) , 'name' => $name ,'price'=>$price , 'color'=>$color , 'quantity'=>$quantity , 'image'=>$image ];

                return $this->render($viewName,$data) ;
               }
               else
               {
                $viewName = 'product.create' ;
                $message = "nhập thiếu thông tin";
                return $this->render($viewName,[]) ;
               }

                

                
            }

            public function createProduct()
            {
                $viewName = 'product.create' ;

                return $this->render($viewName,[]) ;
                
            }
      }
    



?>