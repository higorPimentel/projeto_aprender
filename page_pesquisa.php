<?php 

    session_start();

    
    if($_SESSION['user_atv'] != 1) {
        echo('<script>window.location.href="login.php"</script>');
    }



  
    $_SESSION['title_page'] = 'Pesquisar Temas';
     include_once('includes/topo.php');
     include_once('includes/header_sistema.php');
     include_once('includes/menu_opcoes.php');





?>

<body>


                <div>

                        iniciando conteúdo

                </div>


<?php 

    include_once('includes/scripts.php');

?>


</body>
</html>