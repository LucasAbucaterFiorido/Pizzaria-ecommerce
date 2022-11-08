<body>
    <div class="container ">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="text-center mt-5 mb-5">Tabela de Usuarios</h1>
            </div>
            <div class="col-sm-2">
                <form action="" onsubmit="return false">
                    <label class="form-label" for="txtcod">Código do usuario:</label>
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
                            <th scope="col">Login</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Cargo</th>
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
                                    // $codUsuario = 
                                    $data = $cone->query("SELECT * FROM Usuario WHERE codigo_usuario = $codUsuario");
                                }
                                else
                                {
                                    $data = $cone->query('SELECT * FROM Usuario');
                                }
                                

                                foreach($data as $linhaU)
                                {
                                    $datacdst = date('d-m-Y', strtotime($linhaU["cadastro_usuario"]));

                                    echo "<tr>";    
                                    echo "<td></td>";     
                                    echo "<td></td>";     
                                    echo "<td>" .$linhaU['codigo_usuario'] ."</td>";     
                                    echo "<td>" .$linhaU['nome_usuario'] ."</td>";
                                    echo "<td>".$datacdst ."</td>";
                                    echo "<td>" .$linhaU['login_usuario'] ."</td>";     
                                    echo "<td>" .$linhaU['senha_usuario'] ."</td>";   
                                    echo "<td class='img-table_adm'> <img class='w-100' src='".$linhaU['imagem_usuario']."' alt='imgusuario'> </td>";
                                    echo "<td>" .$linhaU['nome_cargo'] ."</td>";         
                                    echo "<td>" .$linhaU['obs_usuario'] ."</td>";     
                                    echo "<td>" .$linhaU['status_usuario'] ."</td>";    
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
            // alert('teste');  //linhaU de teste
            var callback = $("#callback");

            function carregando(datas)
            {
                callback.empty().html('Carregando..');
            }
            function sucesso(datas)
            {
                // alert('tesasad');    //linhaU de teste
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
                // alert('teste');  //linhaU de teste

                if($("#txtcod").val())
                {
                    action='http://localhost/projetos/GitHub/Pizzaria-Ecommerce/Consultas/usuarios.php'; // erro tentando atualizar a propria pagina com consulta

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