<!DOCTYPE html >
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="css/site.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/site.js"></script>
    <title>YourShop</title>
</head>
    <body>
        <header>
        <div id="hederInside">
            <div id="logo"></div>
            <div id="companyName">YourShop</div>
            <div id="navWrap">
                <a href="/">Главная</a>
                <a href="index.php?page=shop">Магазин</a>
            </div>
        </div>
        </header>
    
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
        <footer>
            <div id="footerInside">
        
                <div id="contacts">
                    <div class="contactWrap">
                        <img src="img/icon-email.svg" class="contactIcon">
                        info@YourShop.ru
                    </div>
                    <div class="contactWrap">
                        <img src="img/phone-call.svg" class="contactIcon">
                        8 800 *** ** **
                    </div>
                    <div class="contactWrap">
                        <img src="img/placeholder.svg" class="contactIcon">
                    Краснодар, ул. ??????, д. * офис ?????
                    </div>
                </div>
            
                <div id="footerNav">
                <a href="/">Главная</a>
                <a href="index.php?page=shop">Магазин</a>
                </div>
        
                <div id="social">
                    <img class="socialItem" src="img/vk-social-logotype.svg">
                    <img class="socialItem" src="img/google-plus-social-logotype.svg">
                    <img class="socialItem" src="img/facebook-logo.svg">
                </div>
        
                <div id="copyrights">&copy; YourShop</div>
            </div>
        </footer>
    </body>

</html>


