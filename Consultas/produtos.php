<body>
    <div class="container ">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="text-center mt-5 mb-5">Tabela de Produtos</h1>
            </div>
            <div class="col-sm-2">
                <form action="" onsubmit="return false">
                    <label class="form-label" for="txtcod">Código do produto:</label>
                    <input class="form-control" type="text" id="txtcod" name="txtcod">
                    <a href="#" class="btn btn-primary" id="btt_consult">Consultar</a>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="callback"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-dark table-striped text-center">  
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Código</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cadastro</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Descricao</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Obs</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include_once('../conexao.php');
                            
                            try 
                            {
                                if($_POST)
                                {
                                    print_r($_POST);
                                    // $codProduto = 
                                    $data = $cone->query("SELECT * FROM Produto WHERE codigo_produto = $codProduto");
                                }
                                else
                                {
                                    $data = $cone->query('SELECT * FROM Produto');
                                }
                                

                                foreach($data as $linha)
                                {
                                    $datacdst = date('d-m-Y', strtotime($linha["cadastro_produto"]));

                                    echo "<tr>";    
                                    echo "<td></td>";     
                                    echo "<td></td>";     
                                    echo "<td>" .$linha['codigo_produto'] ."</td>";     
                                    echo "<td>" .$linha['nome_produto'] ."</td>";
                                    echo "<td>".$datacdst ."</td>";
                                    echo "<td class='img-table_adm'> <img class='w-100' src='".$linha['imagem_produto']."' alt='imgproduto'> </td>";
                                    echo "<td>" .$linha['descricao_produto'] ."</td>";     
                                    echo "<td>" .$linha['qtd_produto'] ."</td>";     
                                    echo "<td>" .$linha['valor_produto'] ."</td>";     
                                    echo "<td>" .$linha['codigo_categoria'] ."</td>";     
                                    echo "<td>" .$linha['obs_produto'] ."</td>";     
                                    echo "<td>" .$linha['status_produto'] ."</td>";    
                                    echo "<td></td>";    
                                    echo "<td></td>";    
                                    echo "</tr>";
                                }

                            } 
                            catch ( PDOException $erro) 
                            {
                                echo 'Erro: ' .$erro->getMessage();
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../../js/jquery-3.6.1.js"></script>
    <script>    //formulario
        $(function()
        {
            // alert('teste');  //linha de teste
            var callback = $("#callback");

            function carregando(datas)
            {
                callback.empty().html('Carregando..');
            }
            function sucesso(datas)
            {
                // alert('tesasad');    //linha de teste
                callback.empty().html(datas); //se obtiver sucesso, ele mostrará os dados puxados
                // callback.empty().html('<pre>'+datas+'</pre>');
                // $("#txtcod").html($("#CodCadastrado"));
            }
            function erro_enviar()
            {
                callback.empty().html("Erro ao enviar");
            }
            $.ajaxSetup({
                type:           'POST',
                beforeSend:     carregando,
                error:          erro_enviar,
                success:        sucesso
            });

            $("#btt_consult").click(function()
            {
                // alert('teste');  //linha de teste

                if($("#txtcod").val())
                {
                    action='http://localhost/n7/php/GitHub/Pizzaria-Ecommerce/Consultas/produtos.php';

                    $.ajax({
                        url:            action,
                        data:{
                            txtcod:     $("#txtcod").val()
                        }
                    });   
                }
                else
                {
                    alert("Necessario código para pesquisar");
                }
            });
        });
    </script>
</body>