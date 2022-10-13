<body>
    <div class="container ">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="text-center mt-5 mb-5">Tabela de Categorias</h1>
            </div>
            <div class="col-sm-2">
                <form action="" onsubmit="return false">
                    <label class="form-label" for="txtcod">Código da categoria:</label>
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
                            <th scope="col">Local Armazenamento</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">obs</th>
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
                                    // $codCategoria = 
                                    $data = $cone->query("SELECT * FROM Categoria WHERE codigo_categoria = $codCategoria");
                                }
                                else
                                {
                                    $data = $cone->query('SELECT * FROM Categoria');
                                }
                                

                                foreach($data as $linhaCat)
                                {
                                    echo "<tr>";    
                                    echo "<td></td>";     
                                    echo "<td></td>";     
                                    echo "<td>" .$linhaCat['codigo_categoria'] ."</td>";     
                                    echo "<td>" .$linhaCat['nome_categoria'] ."</td>";     
                                    echo "<td>" .$linhaCat['localArmaz_categoria'] ."</td>";            
                                    echo "<td>" .$linhaCat['descricao_categoria'] ."</td>";    
                                    echo "<td>" .$linhaCat['obs_categoria'] ."</td>";    
                                    echo "<td>" .$linhaCat['status_categoria'] ."</td>";    
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
            // alert('teste');  //linhaCat de teste
            var callback = $("#callback");

            function carregando(datas)
            {
                callback.empty().html('Carregando..');
            }
            function sucesso(datas)
            {
                // alert('tesasad');    //linhaCat de teste
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
                // alert('teste');  //linhaCat de teste

                if($("#txtcod").val())
                {
                    action='http://localhost/Projetos/php/GitHub/Pizzaria-Ecommerce/Consultas/categorias.php';

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