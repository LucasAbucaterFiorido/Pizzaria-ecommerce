<body>
    <div class="container ">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="text-center mt-5 mb-5">Tabela de Cargos</h1>
            </div>
            <div class="col-sm-2">
                <form action="" onsubmit="return false">
                    <label class="form-label" for="txtcod">Código da cargo:</label>
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
                            <th scope="col">Local de Atuação</th>
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
                                    // $codCargo = 
                                    $data = $cone->query("SELECT * FROM Cargo WHERE codigo_cargo = $codCargo");
                                }
                                else
                                {
                                    $data = $cone->query('SELECT * FROM Cargo');
                                }
                                

                                foreach($data as $linhaCarg)
                                {
                                    echo "<tr>";    
                                    echo "<td></td>";     
                                    echo "<td></td>";     
                                    echo "<td>" .$linhaCarg['codigo_cargo'] ."</td>";     
                                    echo "<td>" .$linhaCarg['nome_cargo'] ."</td>";     
                                    echo "<td>" .$linhaCarg['local_cargo'] ."</td>";            
                                    echo "<td>" .$linhaCarg['descricao_cargo'] ."</td>";    
                                    echo "<td>" .$linhaCarg['obs_cargo'] ."</td>";    
                                    echo "<td>" .$linhaCarg['status_cargo'] ."</td>";    
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
            // alert('teste');  //linhaCarg de teste
            var callback = $("#callback");

            function carregando(datas)
            {
                callback.empty().html('Carregando..');
            }
            function sucesso(datas)
            {
                // alert('tesasad');    //linhaCarg de teste
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
                // alert('teste');  //linhaCarg de teste

                if($("#txtcod").val())
                {
                    action='http://localhost/projetos/GitHub/Pizzaria-Ecommerce/Consultas/cargos.php';

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