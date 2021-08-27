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


        <form class="frm_registro frm_list" style='border:none'>

                    <div  class="row">	
                                <div class="grupo_cxs col-6" id="grupo_cx_id">
                                
                                    <div class='container_table'>                                            
                                    
                                        <table id='table_list'  class='frmt_tabela_fretes'>
                                                    <h1 id='inf_registro'>Registros Listados:00</h1>	 	
                                        </table>
                                    </div>
                                </div>
                        </div>


           </form>

         
<?php 

    include_once('includes/scripts.php');

?>

<script>

window.addEventListener('load',inicio_app)


function inicio_app(){
   
    load_table_pesquisa()

}


</script>


</body>
</html>