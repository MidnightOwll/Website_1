<div id="content">
    <?php 
    $goods=[
        [
            'id'=> 1,
            'name' => 'Asus Zenbook UX331FA-EG007T 13.3',
            'img' => '/img/goods/Asus_Zenbook_UX331FA-EG007T_13.3.jpg',
            'desc' => 'Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара ',
            'price' => '0000 $'
        ],
        [
            'id'=> 2,
            'name' => 'MacBook',
            'img' => '/img/goods/MacBook.jpg',
            'desc' => 'Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара ',
            'price' => '0000 $'
        ],
        [
            'id'=> 3,
            'name' => 'Microsoft Surface Laptop 3',
            'img' => '/img/goods/Microsoft_Surface_Laptop_3.jpg',
            'desc' => 'Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара Описание товара ',
            'price' => '0000 $'
        ]
        ];
    $page= $_GET['page'];

    if(!isset($page)){
        require('templates/main.php');
    } elseif($page == 'shop'){
        require('templates/shop.php');
    } elseif($page == 'product'){
        $id=$_GET['id'];
        $good=[];
        foreach ($goods as $product){
            if($product['id']==$id){
                $good=$product;
                break;
            }
        }
        require('templates/openedProduct.php');
    }             
    ?>
</div>