<div class="row">
                        <div class='col-1'><!-- margem visual --></div>
                        <div class="col-10">
                            <?php
                                try 
                                {
                                    $data = $cone->query('SELECT * FROM Produto');

                                    foreach($data as $linha)
                                    {
                                        echo "<!-- Primeira galeria de item -->
                                            <div class='col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig' data-wow-delay='0.2s'>
                                                <!-- Imagem do produto -->
                                                <div class='product-img'>
                                                    <img src='" .$linha['imagem_produto']."' alt=''>
                                                    <div class='product-quicview'>
                                                        <a href='#' data-toggle='modal' data-target='#quickview'><i class='ti-plus'></i></a>
                                                    </div>
                                                </div>
                                                <!-- Descrição do produto -->
                                                <div class='product-description'>
                                                    <h4 class='product-price'>R$".$linha['valor_produto']."</h4>
                                                    <p>".$linha['nome_produto']."</p>
                                                    <!-- Adicionar ao Carrinho -->
                                                    <a href='#' class='add-to-cart-btn'>+Adicionar Carrinho</a>
                                                </div>
                                            </div>";
                                    }
                                }
                                catch ( PDOException $erro) 
                                {
                                    echo 'Erro: ' .$erro->getMessage();
                                }
                            ?>
                        </div>
                            <div class="col-1"><!-- margem visual --></div>
                    </div>