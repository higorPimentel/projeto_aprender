<?php


   session_start();
    
        date_default_timezone_set('America/Sao_Paulo');
        $type_request = $_POST['type_request'];



    require_once('../class/cn.php');


    
    $_SESSION['cn'] = $cn;    




        if($type_request ==1) {
            echo(executa_login());
        } elseif ($type_request ==2) {
            echo(pesquisa_total());
        }



function executa_login(){

    // GERAR PASSWORD DO TIPO CRYPT

    $login = $_POST['user'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM tb_cad_usuario WHERE login = '$login'";
    $processa_query = mysqli_query($_SESSION['cn'],$sql);


        if($processa_query->num_rows > 0){

            $result = mysqli_fetch_assoc($processa_query);
            $pass_word_bd = $result['senha'] ;
            
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



?>