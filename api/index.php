<?php
// Turn off all error reporting
//error_reporting(0);

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    API
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          API Clube Mais
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php?scope=usuarios_ativos">
              <i class="material-icons">how_to_reg</i>
              <p>Usuários Ativos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?scope=usuarios_inativos">
              <i class="material-icons">person_add_disabled</i>
              <p>Usuários Inativos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?scope=usuarios_bloqueados">
              <i class="material-icons">not_interested</i>
              <p>Usuários Bloqueados</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?scope=cadastrar_usuario">
              <i class="material-icons">person_add</i>
              <p>Cadastrar Usuário</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a data-original-title="Use a função Buscar para poder Excluir ou Editar" rel="tooltip"  class="nav-link" href="#">
              <i class="material-icons">gps_fixed</i>
              <p>Buscar Usuário Ativo</p>
              
              <form action="index.php" method="get">
                    <input type="hidden" name="scope" value="buscar_usuarios">
                    <input type="text" name="cpf" class="form-control" placeholder=" DIGITE AQUI O CPF">
                    <input type="submit" class="btn btn-info" value="Buscar">
              </form>
            </a>
          </li>
          
          
          <li class="nav-item ">
            <a class="nav-link" href="index.php?scope=prospeccao_novo">
              <i class="material-icons">assignment</i>
              <p>Prospecção Novo</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?scope=prospeccao_analise">
              <i class="material-icons">find_in_page</i>
              <p>Prospecção Em Análise</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?scope=prospeccao_contratado">
              <i class="material-icons">assignment_turned_in</i>
              <p>Prospecção Contratado</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php?scope=prospeccao_sem_interesse">
              <i class="material-icons">delete</i>
              <p>Prospecção Sem Interesse</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">gps_not_fixed</i>
              <p>Buscar Prospecção</p>
              
              <form action="index.php" method="get">
                    <input type="hidden" name="scope" value="buscar_prospeccao">
                    <input type="text" name="id" class="form-control" placeholder=" DIGITE O ID DA PROSPECÇÃO">
                    <input type="submit" class="btn btn-info" value="Buscar">
              </form>
            </a>
          </li>
          
          <!--SEPARADOR-->
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <p></p>
            </a>
          </li>
          <!--SEPARADOR-->
          
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">vpn_key</i>
              <p>Gerar Novo Token</p>
              
              <form action="index.php" method="get">
                    <input type="hidden" name="scope" value="gerar_token">
                    
                    <select name="escopo" class="form-control">
                        <i class="material-icons">arrow_right_alt</i><option value=''>>>> Selecione o escopo</option>
                        <option value='usuario_listar'>Listar Usuários</option>
                        <option value='usuario_buscar'>Buscar Usuário</option>
                        <option value='usuario_deletar'>Deletar Usuário</option>
                        <option value='usuario_salvar'>Cadastrar/Salvar Usuário</option>
                        <option value='usuario_editar'>Editar Usuário</option>
                        <option value='prospeccao_listar'>Listar Prospecção</option>
                        <option value='prospeccao_buscar'>Buscar Prospecção</option>
                        <option value='prospeccao_editar'>Editar Prospecção</option>
                    </select>
                    <input type="submit" class="btn btn-info" value="Gerar Token">
              </form>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
<!--          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="#">Configuração</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Sair</a>
                </div>
              </li>
            </ul>
          </div>-->
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title ">Listagem</h4>
                  <p class="card-category"> <?php if(isset($_GET['scope'])){echo 'Listando todos os dados do filtro '.$_GET['scope']; }?></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      
<?php                    
                        include 'functions.php';

                        if(isset($_REQUEST['scope'])){
                            
                            switch ($_REQUEST['scope']){
                                case 'usuarios_ativos':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              Documento
                                            </th>
                                            <th>
                                              Nome
                                            </th>
                                            <th>
                                              STATUS
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                    $status     = 'ativo';
                                    $paginas    = '1';
                                    $qtd_total  = '9999';
                                    
//                                    var_dump (json_decode(fnc_usuario_listar($status,$paginas,$qtd_total),true)["lista"]);
                                    
                                    foreach((json_decode(fnc_usuario_listar($status,$paginas,$qtd_total),true)["lista"]) as $linha){
                                        //var_dump (json_decode(fnc_usuario_listar('ativo','1','999'),true)["lista"]);
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha["id"].'</td>';
                                        echo '<td class="text-center">'.$linha["documento"].'</td>';
                                        echo '<td class="text-center">'.$linha['nome'].'</td>';
                                        echo '<td class="text-center">'.$linha["status"].'</td>';
                                        echo '<td class="text-center">'.$linha['email']['pessoal'].'</td>';
                                        echo '</tr>';
                                    }
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                                case 'usuarios_inativos':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              Documento
                                            </th>
                                            <th>
                                              Nome
                                            </th>
                                            <th>
                                              STATUS
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                    $status     = 'inativo';
                                    $paginas    = '1';
                                    $qtd_total  = '999';
                                    
//                                    var_dump (json_decode(fnc_usuario_listar($status,$paginas,$qtd_total),true)["lista"]);
                                    
                                    foreach((json_decode(fnc_usuario_listar($status,$paginas,$qtd_total),true)["lista"]) as $linha){
                                        //var_dump (json_decode(fnc_usuario_listar('ativo','1','999'),true)["lista"]);
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha["id"].'</td>';
                                        echo '<td class="text-center">'.$linha["documento"].'</td>';
                                        echo '<td class="text-center">'.$linha['nome'].'</td>';
                                        echo '<td class="text-center">'.$linha["status"].'</td>';
                                        echo '<td class="text-center">'.$linha['email']['pessoal'].'</td>';
                                        echo '</tr>';
                                    }
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                                
                                
                                case 'usuarios_bloqueados':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              Documento
                                            </th>
                                            <th>
                                              Nome
                                            </th>
                                            <th>
                                              STATUS
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                    $status     = 'bloqueados';
                                    $paginas    = '1';
                                    $qtd_total  = '9999';
                                    
//                                    var_dump (json_decode(fnc_usuario_listar($status,$paginas,$qtd_total),true)["lista"]);
                                    
                                    foreach((json_decode(fnc_usuario_listar($status,$paginas,$qtd_total),true)['lista']) as $linha){
                                        //var_dump (json_decode(fnc_usuario_listar('ativo','1','999'),true)["lista"]);
                                        
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha['id'].'</td>';
                                        echo '<td class="text-center">'.$linha['documento'].'</td>';
                                        echo '<td class="text-center">'.$linha['nome'].'</td>';
                                        echo '<td class="text-center">'.$linha['status'].'</td>';
                                        echo '<td class="text-center">'.$linha['email']['pessoal'].'</td>';
                                        echo '</tr>';
                                    }
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                                case 'buscar_usuarios':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              Documento
                                            </th>
                                            <th>
                                              Nome
                                            </th>
                                            <th>
                                              AÇÕES
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                        $cpf   = $_GET['cpf'];
                                        $linha = json_decode(fnc_buscar_usuario($cpf),true);
//                                        var_dump($linha);
                                        
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha['id'].'</td>';
                                        echo '<td class="text-center">'.$linha['documento'].'</td>';
                                        echo '<td class="text-center">'.$linha['nome']['completo'].'</td>';
                                        echo '<td class="text-center">
                                                <a href="index.php?scope=editar_usuario&cpf='.$linha['documento'].'" data-original-title="Editar" rel="tooltip" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                                <a href="index.php?scope=deletar_usuario&cpf='.$linha['documento'].'" data-original-title="ATENÇÃO! Clicou Apagou!" rel="tooltip"  class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                              </td>';
                                        echo '</tr>';
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                                case 'editar_usuario':
                                    
                                    echo '<h3 class="text-center">EDITAR USUÁRIO</h3>';
                                    
                                    $cpf      = $_GET['cpf'];
                                    $linha    = json_decode(fnc_buscar_usuario($cpf),true);
                                    
//                                    var_dump($linha);
                                    
                                    echo '<form action="index.php" method="post">
                                                <input type="hidden" name="scope" value="gravar_edicao_usuario">
                                                <input type="hidden" name="id"    value="'.$linha["id"].'">
                                                <p>
                                                    <span>CPF</span>
                                                    <input type="text" readonly       placeholder=" CPF"                value="'.$linha["documento"].'" name="cpf" class="form-control">
                                                </p>
                                                <p>
                                                    <span>NOME COMPLETO</span>
                                                    <input type="text" maxlength="50" placeholder=" NOME COMPLETO"      value="'.$linha["nome"]["completo"].'" name="nome" class="form-control">
                                                </p>
                                                <p>
                                                    <span>E-MAIL DO TRABALHO</span>
                                                    <input type="text" maxlength="80" placeholder=" E-MAIL DO TRABALHO" value="'.$linha["contato"]["email"]["trabalho"].'" name="email_trabalho" class="form-control">
                                                </p>   
                                                <p>
                                                    <span>E-MAIL PESSOAL</span>
                                                    <input type="text" maxlength="80" placeholder=" E-MAIL PESSOAL"     value="'.$linha["contato"]["email"]["pessoal"].'" name="email_pessoal" class="form-control">
                                                </p>
                                                <p>
                                                    <span>TELEFONE FIXO</span>
                                                    <input type="text" maxlength="10" placeholder=" TELEFONE FIXO"      value="'.$linha["contato"]["telefone"]["fixo"].'" name="tel_fixo" class="form-control">
                                                </p>
                                                <p>
                                                    <span>TELEFONE CELULAR</span>
                                                    <input type="text" maxlength="10" placeholder=" TELEFONE CELULAR"   value="'.$linha["contato"]["telefone"]["celular"].'" name="tel_cel" class="form-control">
                                                </p>
                                                <p>
                                                    <span>ESTADO</span>
                                                    <input type="text" maxlength="2"  placeholder=" ESTADO"             value="'.$linha["endereco"]["estado"].'" name="estado" class="form-control">
                                                </p>
                                                <p>
                                                    <span>CIDADE</span>
                                                    <input type="text" maxlength="40" placeholder=" CIDADE"             value="'.$linha["endereco"]["cidade"].'" name="cidade" class="form-control">
                                                </p>
                                                <p style="margin-top:15px;"><input type="submit" class="btn btn-info" value="Gravar"></p>
                                          </form>';
                                        
                                break;
                            
                                case 'gravar_edicao_usuario':
                                     echo '<table class="table">';
                                     echo '<thead class="text-center">
                                            <th>
                                              Mensagem
                                            </th>
                                           </thead>
                                           <tbody>';
                                    
                                    $array_dados[0] = $_POST['cpf'];
                                    $array_dados[1] = $_POST['nome'];
                                    $array_dados[2] = $_POST['email_trabalho'];
                                    $array_dados[3] = $_POST['email_pessoal'];
                                    $array_dados[4] = $_POST['tel_fixo'];
                                    $array_dados[5] = $_POST['tel_cel'];
                                    $array_dados[6] = $_POST['data_nasc'];
                                    $array_dados[7] = $_POST['estado'];
                                    $array_dados[8] = $_POST['cidade'];
                                    
                                    $linha    = json_decode(fnc_editar_usuario($array_dados),true);
//                                  var_dump($linha);
                                    
                                    echo '<tr>';
                                        if(isset($linha['erro'])){
                                            echo '<td class="text-center">'.$linha['titulo'].' '.$linha['texto'].'</td>';
                                        }else{
                                            echo '<td class="text-center">Sucesso!</td>';
                                        }
                                    echo '</tr>';
                                    echo '</tbody>';
                                    echo '</table>';                                 
                                break;
                            
                                case 'cadastrar_usuario':
                                    echo '<h3 class="text-center">CADASTRAR USUÁRIO</h3>';
                                    echo '<form action="index.php" method="post">
                                                <input type="hidden" name="scope" value="usuario_salvar">
                                                <p>
                                                    <span>CPF</span>
                                                    <input type="text" maxlength="11" placeholder=" CPF" name="cpf" class="form-control">
                                                </p>
                                                <p>
                                                    <span>NOME COMPLETO</span>
                                                    <input type="text" maxlength="50" placeholder=" NOME COMPLETO" name="nome" class="form-control">
                                                </p>
                                                <p>
                                                    <span>E-MAIL PESSOAL</span>
                                                    <input type="text" maxlength="80" placeholder=" E-MAIL PESSOAL" name="email_pessoal" class="form-control">
                                                </p>  
                                                <p style="margin-top:15px;"><input type="submit" class="btn btn-info" value="Gravar"></p>
                                          </form>';
                                break;
                            
                                case 'usuario_salvar':
                                     echo '<table class="table">';
                                     echo '<thead class="text-center">
                                            <th>
                                              Mensagem
                                            </th>
                                           </thead>
                                           <tbody>';
                                    
                                    $array_dados[0] = $_POST['cpf'];
                                    $array_dados[1] = $_POST['nome'];
                                    $array_dados[2] = $_POST['email_pessoal'];
                                    
                                    $linha    = json_decode(fnc_cadastrar_usuario($array_dados),true);
                                    
                                    echo '<tr>';
                                        if(isset($linha['erro'])){
                                            echo '<td class="text-center">'.$linha['titulo'].' '.$linha['texto'].'</td>';
                                        }else{
                                            echo '<td class="text-center">Sucesso!</td>';
                                        }
                                    echo '</tr>';
                                    echo '</tbody>';
                                    echo '</table>';                                 
                                break;
                            
                                case 'deletar_usuario':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              Mensagem
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                        // REMOVENDO TRAÇOS E PONTOS DO CPF
                                        $cpf            = $_GET['cpf'];
                                        $cpf_sem_ponto  = str_replace("." , "" , $cpf ); // Primeiro tira os pontos
                                        $cpf_limpo      = str_replace("-" , "" , $cpf_sem_ponto); // Depois tira a vírgula
                                        $linha          = json_decode(fnc_deletar_usuario($cpf_limpo),true);
                                        
                                        echo '<tr>';
                                            if(isset($linha['erro'])){
                                                echo '<td class="text-center">'.$linha['titulo'].' '.$linha['texto'].'</td>';
                                            }else{
                                                echo '<td class="text-center">Sucesso!</td>';
                                            }
                                        echo '</tr>';
                                        echo '</tbody>';
                                        echo '</table>';
                                        
                                break;
                                
                                case 'prospeccao_novo':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              STATUS
                                            </th>
                                            <th>
                                              AÇÕES
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                    $status    = 'novo';
                                    $pagina    = '1';
                                    
                                    foreach((json_decode(fnc_listar_prospeccao($status, $pagina),true)["lista"]) as $linha){
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha["id"].'</td>';
                                        echo '<td class="text-center">'.$linha["status"].'</td>';
                                        echo '<td class="text-center">
                                                <a href="index.php?scope=editar_prospeccao&id='.$linha['id'].'" data-original-title="Editar" rel="tooltip" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                              </td>';
                                        echo '</tr>';
                                    }
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                                case 'prospeccao_contratado':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              STATUS
                                            </th>
                                            <th>
                                              AÇÕES
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                    $status    = 'contratado';
                                    $pagina    = '1';
                                    
                                    foreach((json_decode(fnc_listar_prospeccao($status,$pagina),true)["lista"]) as $linha){
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha["id"].'</td>';
                                        echo '<td class="text-center">'.$linha["status"].'</td>';
                                        echo '<td class="text-center">
                                                <a href="index.php?scope=editar_prospeccao&id='.$linha['id'].'" data-original-title="Editar" rel="tooltip" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                              </td>';
                                        echo '</tr>';
                                    }
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                                case 'prospeccao_analise':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              STATUS
                                            </th>
                                            <th>
                                              AÇÕES
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                    $status    = 'analise';
                                    $pagina    = '1';
                                    
                                    foreach((json_decode(fnc_listar_prospeccao($status,$pagina),true)["lista"]) as $linha){
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha["id"].'</td>';
                                        echo '<td class="text-center">'.$linha["status"].'</td>';
                                        echo '<td class="text-center">
                                                <a href="index.php?scope=editar_prospeccao&id='.$linha['id'].'" data-original-title="Editar" rel="tooltip" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                              </td>';
                                        echo '</tr>';
                                    }
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                                case 'prospeccao_sem_interesse':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              STATUS
                                            </th>
                                            <th>
                                              AÇÕES
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                    $status    = 'seminteresse';
                                    $pagina    = '1';
                                    
                                    foreach((json_decode(fnc_listar_prospeccao($status,$pagina),true)["lista"]) as $linha){
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha["id"].'</td>';
                                        echo '<td class="text-center">'.$linha["status"].'</td>';
                                        echo '<td class="text-center">
                                                <a href="index.php?scope=editar_prospeccao&id='.$linha['id'].'" data-original-title="Editar" rel="tooltip" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                              </td>';
                                        echo '</tr>';
                                    }
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                                case 'buscar_prospeccao':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              ID
                                            </th>
                                            <th>
                                              NOME
                                            </th>
                                            <th>
                                              STATUS
                                            </th>
                                            <th>
                                              AÇÕES
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                        $id   = $_GET['id'];
                                        $linha = json_decode(fnc_buscar_prospeccao($id),true);
                                        
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha['id'].'</td>';
                                        echo '<td class="text-center">'.$linha['nome'].'</td>';
                                        echo '<td class="text-center">'.$linha['status'].'</td>';
                                        echo '<td class="text-center">
                                                <a href="index.php?scope=editar_prospeccao&id='.$linha['id'].'" data-original-title="Editar" rel="tooltip" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                              </td>';
                                        echo '</tr>';
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                                
                            case 'editar_prospeccao':
                                    
                                    echo '<h3 class="text-center">EDITAR STATUS DA PROSPECÇÃO</h3>';
                                    
                                    $id       = $_GET['id'];
                                    $linha    = json_decode(fnc_buscar_prospeccao($id),true);
                                    
                                    echo '<form action="index.php" method="post">
                                                <input type="hidden" name="scope" value="gravar_edicao_prospeccao">
                                                <input type="hidden" name="id"    value="'.$linha["id"].'">
                                                <p>
                                                    <span>NOME</span> 
                                                    <input type="text" readonly value="'.$linha["nome"].'" class="form-control">
                                                </p>
                                                <p>
                                                    <span>STATUS</span>
                                                    <select class="form-control" name="status">
                                                        <option value="'.$linha["status"].'">'.strtoupper($linha["status"]).'</option>
                                                        <option value="novo">NOVO</option>
                                                        <option value="contratado">CONTRATADO</option>
                                                        <option value="analise">ANÁLISE</option>
                                                        <option value="seminteresse">SEM INTERESSE</option>
                                                    </select>
                                                </p>
                                                <p style="margin-top:15px;"><input type="submit" class="btn btn-info" value="Gravar"></p>
                                          </form>';
                                        
                                break;
                            
                                case 'gravar_edicao_prospeccao':
                                     echo '<table class="table">';
                                     echo '<thead class="text-center">
                                            <th>
                                              Mensagem
                                            </th>
                                           </thead>
                                           <tbody>';
                                    
                                    $array_dados[0] = $_POST['id'];
                                    $array_dados[1] = $_POST['status'];
                                    $linha    = json_decode(fnc_editar_prospeccao($array_dados),true);
                                    
                                    echo '<tr>';
                                        if(isset($linha['erro'])){
                                            echo '<td class="text-center">'.$linha['titulo'].' '.$linha['texto'].'</td>';
                                        }else{
                                            echo '<td class="text-center">Sucesso!</td>';
                                        }
                                    echo '</tr>';
                                    echo '</tbody>';
                                    echo '</table>';                                 
                                break;
                                
                                case 'gerar_token':
                                    echo '<table class="table">';
                                    echo '<thead class="text-center">
                                            <th>
                                              MENSAGEM
                                            </th>
                                            <th>
                                              TOKEN
                                            </th>
                                            <th>
                                              ESCOPO
                                            </th>
                                          </thead>
                                          <tbody>';
                                    
                                        // RECEBENDO O ESCOPO E GERANDO O TOKEN
                                        $escopo = $_GET['escopo'];
                                        $linha = json_decode(fnc_gerar_token($scope),true);
                                        
                                        echo '<tr>';
                                        echo '<td class="text-center">'.$linha['erro'].'</td>';
                                        echo '<td class="text-center">'.$linha['token'].'</td>';
                                        echo '<td class="text-center">'.$escopo.'</td>';
                                        echo '</tr>';
                                        echo '</tbody>';
                                        echo '</table>';
                                break;
                            }
                        }
?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>
