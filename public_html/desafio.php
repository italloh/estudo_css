<?php
    require_once './autoload.php';
    $objProdutos = new Produtos();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DESAFIO - SOFTBOX</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href="css/desafio.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="top-header">
                    <div class="top-menu">
                        <ul class="lista-horizontal">
                            <li><a href="" class="link-top-menu">Account Sign </a></li>
                            <li><a href="" class="link-top-menu">Register</a></li>
                            <li><a href="" class="link-top-menu">Buyers Guide</a></li>
                            <li><a href="" class="link-top-menu">About</a></li>
                            <li><a href="" class="link-top-menu">Blog</a></li>
                            <li><a href="" class="link-top-menu">Contact</a></li>
                        </ul>
                    </div>
                    <div class="top-contact">
                        <ul class='lista-horizontal'>
                            <li><a href="#" class="link-top-menu">123.456.7890</a></li>
                            <li><a href="#" class="link-top-menu">Live Help</a></li>
                            <li><a href="#" class="link-top-menu">CAN</a></li>
                            <li><a href="#" class="link-top-menu">USA</a></li>
                        </ul> 
                    </div>
                </div>
                <div class='header-titulo'>
                    <div id='carrinho'>
                    <div id='shop-bag'></div>
                    <p style="margin-top: 30px;">
                        0 Items in your bag
                    </p>
                        <input type='button' id='button-carrinho' value='Check out' />
                           
                    </div>
                    <div class='titulo-page'>
                        ECOMMERCE<br />WEBSITE
                    </div>

                    <div class='div-form-search'>
                        <form class="form-search">
                            <input type='text' name='search' id='txt-search' placeholder="Search website" />
                            <input type='submit' id='submit-search' value='GO' />
                        </form>
                    </div>
                </div>   
       
                <div class='menu'>
                    <ul class='lista-horizontal'>
                        <li>HOME</li>
                        <li>LAST ARRIVALS</li>
                        <li>MEN´S</li>
                        <li>WOMEN´S</li>
                        <li>KIDS</li>
                        <li>BRANDS</li>
                        <li>SALE</li>
                        <li>GIFT CARDS</li>
                        <li>FREEBIES</li>
                    </ul>
                </div>
            </div>
            <div class='conteudo'>
                <div class='banner'>
                    <img src="imagem/banner.jpg"
                         alt="Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Proin a sem vitae ligula vulputate faucibus. 
                            Duis bibendum, leo et auctor consequat, velit."
                         title="Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Proin a sem vitae ligula vulputate
                            faucibus. Duis bibendum, leo et auctor consequat,
                            velit." />
                    <div class='legenda'>
                        <div id='product-title'>PRODUCT TITLE</div>
                        <div id='text-legenda'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Maecenas consequat sodales est, non gravida 
                            massa volutpat in. Donec in diam non enim feugiat 
                            laoreet. Cras ipsum nunc, porta eleifend nibh id, 
                            feugiat scelerisque tellus. Etiam pretium odio ac 
                            scelerisque dapibus. Vestibulum ante ipsum primis 
                            in faucibus orci luctus et ultrices posuere cubilia
                            Curae; Aliquam in nisl sit amet turpis convallis.
                        </div>
                    </div>
                    <div style="clear: both">
                        
                    </div>
                </div>
                <div class='lado-direito'>
                    <ul class="lista-vertical menu-lateral">
                        <li>BROWSE CATEGORIES</li>
                        <li>Lorem ipsum </li>
                        <li>Morbi rhoncus</li>
                        <li>Mauris pretium</li>
                        <li>Suspendisse ut turpis</li>
                        <li>Donec tincidunt</li>
                        <li>Suspendisse aliquam</li>
                        <li>Nulla sed nulla </li>
                        <li>Quisque pulvinar</li>
                        <li>Aliquam venenatis</li>
                        <li>Phasellus aliquam</li>
                        <li>&nbsp;</li>
                    </ul>                    
                    <div class='follow'>
                        <p>
                            Join our newsletter list
                            to get the latest updates
                        </p>
                        <p>
                            <input type="text" value="" />
                        </p>
                        <p>
                            <input type='button' class='btn alto-relevo' value='Join Now' />
                        </p>
                        <ul class='lista-vertical' id="rede-social">
                            <li id="twitter"> Follow us on Twitter</li>
                            <li id="facebook"> Become our fan on Facebook</li>
                            <li id="linkedin"> Connect with us Linkedin</li>
                            <li id="email"> Send us your email enquiries</li>
                        </ul>
                        <div style="clear: both"></div>
                        <div class='payment paypal'></div>
                        <div class='payment google-checkout'></div>
                        <div class='anti-virus'></div>
                    </div>
                </div>
                <div class='lado-esquerdo'>
                    <div class='toolbar'>
                        <div class='order'>
                            <span>Sort by:</span>
                            <select class='combobox'>
                                <option>Ascending</option>
                            </select>
                            <select class='combobox'>
                                <option>Product Name</option>
                            </select>
                            <select class='Brand Name'>
                                <option>Brand Name</option>
                            </select>                            
                        </div>                        
                        <div class='per-page'>
                            <span>Items per page:</span>
                            <ul class="lista-horizontal">
                                <li><a href="#">12</a></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#">30</a></li>
                                <li><a href="#">50</a></li>
                            </ul>
                        </div>
                    </div>          
                    <div style="clear: both"></div>
                    <div class='produtos'>
                        <span class='span-titulo'>OUR PRODUCTS</span>
                        <br />
                        <?php
                            $end = filter_input(INPUT_GET,'end',FILTER_VALIDATE_INT);
                            $start = filter_input(INPUT_GET,'start',FILTER_VALIDATE_INT);
                            $conteudo = filter_input(INPUT_GET,'search',FILTER_DEFAULT);
                            $produtos = $objProdutos->pesquisar($conteudo, $start, $end);
                            $pagina = filter_input(INPUT_GET,'pagina',FILTER_VALIDATE_INT);
                            $pagina = ($pagina === null) ? 1 : $pagina;
                            if ( count($produtos['produtos']) > 0 ) {
                                foreach ( $produtos['produtos'] as $prod ) {
                                ?>
                                <div class="produto">
                                    <img src="<?php echo $prod["Foto"] ?>" alt="<?php echo $prod['Nome'] ?>" />
                                    <p class="titulo-produtos"><?php echo Produtos::RESUMIR_NOME_PRODUTO($prod["Nome"]) ?></p>
                                    <div class="preco-produto">
                                        Pre&ccedil;o: <span>R$ <?php echo number_format($prod["PrecoPor"],2,",",".") ?></span>
                                    </div>
                                </div>
                                <?php
                                }
                            }
                        ?>
       
                        <div style="clear: both"></div>
                    </div>
                    <div class='paginacao'>
 <?php
                            if ( isset($produtos["totalPaginas"]) ) {
                                for ( $i = 0; $i<$produtos["totalPaginas"]; $i ++ ) {
                                    if ( $i+1 == $pagina ) {
                                        $class='class="actived"';
                                    } else {
                                        $class='';
                                    }
                                    echo "<a $class href='?search=".$conteudo."&start=".($i*5)."&end=".(($i+1)*5)."&pagina=".($i+1)."#produtos'>".($i+1)."</a>";
                                }
                            }
                        ?>
                    </div>
                    <br />
                    <hr>
                    <div class='feactured-products' style="position: relative">
                        <span class='span-titulo'>FEATURED PRODUCTS</span>
                        <div id="seta_esquerda">
                            <img  src="imagem/seta_esquerda.jpg" />
                        </div>  
                        <div id="seta_direita">
                            <img  src="imagem/seta_direita.jpg" />
                        </div>  
                        <div class='produtos box-shadow'>
                            <?php 
                                $arrProdutos = $objProdutos->listarAleatorio();
                                foreach ( $arrProdutos['produtos'] as $prod ) {
                                    ?>
                                    <div class="produto feactured">
                                        <img src="<?php echo $prod["Foto"] ?>" alt="<?php echo $prod['Nome'] ?>" />
                                        <br />
                                        <p class="titulo-produtos"><?php echo $prod["Nome"] ?></p>
                                        <div class="preco-produto">
                                            Pre&ccedil;o: <span>R$ <?php echo number_format($prod["PrecoPor"],2,",",".") ?></span>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class='footer'>
                    <ul class="lista-horizontal barra-footer">
                        <li><p>Shop online with us safely & securely</p></li>
                        <li><p>We ship your orders anywhere!</p></li>
                        <li>
                            <form class="form-search">
                                <input type='text' name='search' id='txt-search' placeholder="Search website" />
                                <input type='submit' id='submit-search' value='GO' />
                            </form>
                        </li>
                    </ul>
                     <div class='site-map' style="clear: both">
                        <div class='list-site-map'>
                            <span class='titulo branco'>Company</span>
                            <ul class="lista-vertical">
                                <li>Home</li>
                                <li>About Us</li>
                                <li>Blog</li>
                                <li>Latest News</li>
                                <li>Login</li>
                                <li>Join Us</li>
                            </ul>
                        </div>
                        <div class='list-site-map'>
                            <span class='titulo branco'>Categories</span>
                            <ul class="lista-vertical">
                                <li>BROWSE CATEGORIES</li>
                                <li>Lorem ipsum </li>
                                <li>Morbi rhoncus</li>
                                <li>Mauris pretium</li>
                                <li>Suspendisse ut turpis</li>
                                <li>Donec tincidunt</li>
                            </ul>
                        </div>
                        <div class='list-site-map'>
                            <span class="titulo branco">Information</span>
                            <ul class="lista-vertical">
                                <li>My Account</li>
                                <li>Rewards</li>
                                <li>Terms & Conditions</li>
                                <li>Buying Guide</li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                        <div class='list-site-map'>
                            <span class="titulo branco">Social Network</span>
                            <ul class="lista-vertical">
                                <li>My Account</li>
                                <li>Rewards</li>
                                <li>Terms & Conditions</li>
                                <li>Buying Guide</li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                        <div class='list-site-map'>
                            <span class="titulo branco">Contact Us</span>
                            <ul class="lista-vertical">
                                <li>Phone: 1.234.567.8901</li>
                                <li>Toll-Free: 1.234.567.8901</li>
                                <li>Fax: 1.234.567.8901</li>
                                <li>Email: <a href='mailto:itallo.php@gmail.com'>Send us an email</a></li>
                                <li>&nbsp;</li>
                                <li>MON-SAT 9am to 7:30pm</li>
                                <li>Sundays, holidays closed</li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
        </div>
    </body>
</html>
