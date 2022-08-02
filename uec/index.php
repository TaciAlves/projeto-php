<?php
//Iniciando a session
session_start();
//Por padrão todo usuario inicia deslogado
$_SESSION["usuarioLogado"] = false;

//localhost/diogo/uec?pagina=3

//Operador ternario
$pagina = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['pagina']) ) ? $_GET['pagina'] :999 ;
$id = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['id']) ) ? $_GET['id']: 0;
$alert = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['alert']) ) ? $_GET['alert']: 0;
$termoBusca = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty( $_GET['termo']) ) ? $_GET['termo']: 0;

if($pagina === '1'){
    //Cadastro Lutador
    include_once "view/template/topo.php";
    include_once 'view/view_cadastro_lutador.php';
    include_once "view/template/rodape.php";
    
}else if($pagina === '2'){
    //cadastro usuário
    include_once 'model/conexao.php';
    include_once 'model/usuario.php';
    include_once "view/template/topo.php";
    include_once 'view/view_cadastro_usuario.php';
    include_once "view/template/rodape.php";
}else if($pagina === '3'){
    //lista de usuários
    include_once 'model/conexao.php';
    include_once 'model/usuario.php';
    include_once 'controller/usuario_controller.php';
    include_once "view/template/topo.php";
    include_once 'view/view_cadastro_usuario.php';
    include_once 'view/view_lista_usuario.php';
    include_once "view/template/rodape.php";
    
}else if($pagina === '4'){
    //Edita de usuários
    include_once 'model/conexao.php';
    include_once 'model/usuario.php';
    include_once 'controller/usuario_controller.php';
    include_once "view/template/topo.php";
    include_once "view/view_editar_usuario.php";
    include_once "view/template/rodape.php";
} else if($pagina === '5'){
    //lista de deletar
    include_once 'model/conexao.php';
    include_once 'model/usuario.php';
    include_once 'controller/usuario_controller.php';
   
} else if($pagina === '6'){
    //lista de buscar
    include_once 'model/conexao.php';
    include_once 'model/usuario.php';
    include_once 'controller/usuario_controller.php';
    include_once "view/template/topo.php";
    include_once 'view/view_lista_usuario.php';
    include_once "view/template/rodape.php";
   
   
}
else{
    //login
    include_once "view/template/topo.php";
    include_once 'view/view_login_usuario.php';
    include_once "view/template/rodape.php";
}


