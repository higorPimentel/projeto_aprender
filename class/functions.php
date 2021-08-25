<?php


   session_start();
    
        date_default_timezone_set('America/Sao_Paulo');
        $type_request = $_POST['type_request'];



    require_once('../class/cn.php');


    
    $_SESSION['cn'] = $cn;    




        if($type_request ==1) {
            echo(executa_login());
        } elseif ($type_request ==2) {
            echo(load_cad_pesquisa());
        } elseif ($type_request ==3) {
            echo(executa_logof());
        } elseif ($type_request ==4) {
            echo(load_cad_livro());
        } elseif ($type_request ==5) {
            echo(load_cad_curso());
        }


//1
function executa_login(){

    // GERAR PASSWORD DO TIPO CRYPT

    $login = $_POST['user'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM tb_cad_usuario WHERE login = '$login'";
    $processa_query = mysqli_query($_SESSION['cn'],$sql);


        if($processa_query->num_rows > 0){

            $result = mysqli_fetch_assoc($processa_query);
            $pass_word_bd = $result['password'] ;
            
            $password_verific = password_verify($senha,$pass_word_bd);

                    if( $password_verific ==1) {

                        $sucess = 1;
                        $_SESSION['user_atv'] = 1;
                        $_SESSION['user_name'] = $result['nome_usuario'];


                    } else {

                        $sucess = 2;
                        $_SESSION['user_atv'] = 0;

                    }
            
        } else {
            $sucess = 0;
            $_SESSION['user_atv'] = 0;

        }

    return  $sucess;
}



//2

function load_cad_pesquisa(){

    $type_filter = $_POST['type_filter'];


        if($type_filter == 'todos') {            
            $sql = "SELECT * FROM tb_cad_pesquisa";

        } else {

        }


  
    $processa_query = mysqli_query($_SESSION['cn'],$sql);


        foreach ($processa_query as $row) {
            $dados []= $row;
        }

        return json_encode($dados);



}


//3
function executa_logof() {

    $_SESSION['user_atv'] = 0;

}


// 4
function load_cad_livro(){

    $type_filter = $_POST['type_filter'];


        if($type_filter == 'todos') {            
            $sql = "SELECT * FROM tb_cad_livro";

        } else {

        }


  
    $processa_query = mysqli_query($_SESSION['cn'],$sql);


        foreach ($processa_query as $row) {
            $dados []= $row;
        }

        return json_encode($dados);

}

//5
function load_cad_curso() {

    $type_filter = $_POST['type_filter'];


        if($type_filter == 'todos') {            
            $sql = "SELECT * FROM tb_cad_curso";

        } else {

        }


  
    $processa_query = mysqli_query($_SESSION['cn'],$sql);


        foreach ($processa_query as $row) {
            $dados []= $row;
        }

        return json_encode($dados);


}


?>