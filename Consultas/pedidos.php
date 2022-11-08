<body>
    <div class="container ">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="text-center mt-5 mb-5">Tabela de Vendas</h1>
            </div>
            <div class="col-sm-2">
                <form action="" onsubmit="return false">
                    <label class="form-label" for="txtcod">Código da venda:</label>
                    <input class="form-control" type="text" id="txtcod" name="txtcod">
                    <a href="#" class="btn btn-primary" id="btt_consult">Consultar</a>
                </form>
            </div>
            <div class="col-sm-2">
                <form action="" onsubmit="return false">
                    <label class="form-label" for="txtcod">Código de usuario:</label>
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
                            <th scope="col">Cadastro</th>
                            <th scope="col">Quantidade total</th>
                            <th scope="col">Valor Total</th>
                            <th scope="col">Usuario</th>
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
                                    // $codVenda = 
                                    $data = $cone->query("SELECT * FROM Venda WHERE codigo_venda = $codVenda");
                                }
                                else
                                {
                                    $data = $cone->query('SELECT * FROM Venda');
                                }
                                

                                foreach($data as $linhaV)
                                {
                                    $datacdst = date('d-m-Y', strtotime($linhaV["cadastro_venda"]));

                                    echo "<tr>";    
                                    echo "<td></td>";     
                                    echo "<td></td>";     
                                    echo "<td>" .$linhaV['codigo_venda'] ."</td>";     
                                    echo "<td>".$datacdst ."</td>";
                                    echo "<td>" .$linhaV['qtdTotal_venda'] ."</td>";     
                                    echo "<td>R$ " .$linhaV['valorTotal_venda'] ."</td>";            
                                    echo "<td>" .$linhaV['codigo_usuario'] ."</td>";    
                                    echo "<td>" .$linhaV['status_venda'] ."</td>";    
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
            // alert('teste');  //linhaV de teste
            var callback = $("#callback");

            function carregando(datas)
            {
                callback.empty().html('Carregando..');
            }
            function sucesso(datas)
            {
                // alert('tesasad');    //linhaV de teste
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
                // alert('teste');  //linhaV de teste

                if($("#txtcod").val())
                {
                    action='http://localhost/projetos/GitHub/Pizzaria-Ecommerce/Consultas/pedidos.php';

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