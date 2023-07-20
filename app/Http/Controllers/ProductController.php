<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public  $products=[
        ['id'=>1, 'img'=>'https://picsum.photos/200', 'name'=>'smartphone', 'stock'=>15,'price'=>315.56, 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cupiditate magni numquam adipisci vero repudiandae necessitatibus excepturi maxime accusantium, voluptas molestias non unde ad! Numquam ducimus sapiente ratione, exercitationem debitis eligendi quia itaque voluptatum expedita, vitae quos dicta. Necessitatibus aliquam dolorem voluptates sapiente. Quod doloribus dolorum, exercitationem corporis atque, nesciunt labore pariatur quia molestias porro sunt, esse aperiam.'],
        ['id'=>2, 'name'=>'laptop', 'img'=>'https://picsum.photos/201', 'stock'=>27,'price'=>815.96, 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cupiditate magni numquam adipisci vero repudiandae necessitatibus excepturi maxime accusantium, voluptas molestias non unde ad! Numquam ducimus sapiente ratione, exercitationem debitis eligendi quia itaque voluptatum expedita, vitae quos dicta. Necessitatibus aliquam dolorem voluptates sapiente. Quod doloribus dolorum, exercitationem corporis atque, nesciunt labore pariatur quia molestias porro sunt, esse aperiam.'],
        ['id'=>3, 'name'=>'smart tv', 'img'=>'https://picsum.photos/199', 'stock'=>35,'price'=>258.37, 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cupiditate magni numquam adipisci vero repudiandae necessitatibus excepturi maxime accusantium, voluptas molestias non unde ad! Numquam ducimus sapiente ratione, exercitationem debitis eligendi quia itaque voluptatum expedita, vitae quos dicta. Necessitatibus aliquam dolorem voluptates sapiente. Quod doloribus dolorum, exercitationem corporis atque, nesciunt labore pariatur quia molestias porro sunt, esse aperiam.'],
        ['id'=>4, 'name'=>'earplugs', 'img'=>'https://picsum.photos/202', 'stock'=>12,'price'=>99.52, 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cupiditate magni numquam adipisci vero repudiandae necessitatibus excepturi maxime accusantium, voluptas molestias non unde ad! Numquam ducimus sapiente ratione, exercitationem debitis eligendi quia itaque voluptatum expedita, vitae quos dicta. Necessitatibus aliquam dolorem voluptates sapiente. Quod doloribus dolorum, exercitationem corporis atque, nesciunt labore pariatur quia molestias porro sunt, esse aperiam.'],
        ['id'=>5, 'name'=>'camera', 'img'=>'https://picsum.photos/198', 'stock'=>29,'price'=>121.86, 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cupiditate magni numquam adipisci vero repudiandae necessitatibus excepturi maxime accusantium, voluptas molestias non unde ad! Numquam ducimus sapiente ratione, exercitationem debitis eligendi quia itaque voluptatum expedita, vitae quos dicta. Necessitatibus aliquam dolorem voluptates sapiente. Quod doloribus dolorum, exercitationem corporis atque, nesciunt labore pariatur quia molestias porro sunt, esse aperiam.'],
        ['id'=>6, 'name'=>'tablet', 'img'=>'https://picsum.photos/203', 'stock'=>21,'price'=>415.34, 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cupiditate magni numquam adipisci vero repudiandae necessitatibus excepturi maxime accusantium, voluptas molestias non unde ad! Numquam ducimus sapiente ratione, exercitationem debitis eligendi quia itaque voluptatum expedita, vitae quos dicta. Necessitatibus aliquam dolorem voluptates sapiente. Quod doloribus dolorum, exercitationem corporis atque, nesciunt labore pariatur quia molestias porro sunt, esse aperiam.']

    ];

    public function index(){
        return view('product', ['products' => $this->products]);
    }

    public function show($id){
        foreach($this->products as $product){
            if($product['id'] == $id){
                return view('detail', ['product' => $product]);
            }
        }
    }
}
