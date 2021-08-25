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


        <form class="frm_registro" style='border:none'>

                    <div  class="row">	
                                <div class="grupo_cxs col-5_2" id="grupo_cx_id">
                                
                                    <div class='container_table table_video_principal'>                                            
                                    
                                         <table id='table_list'  class='frmt_tabela_fretes'>
                                                    <h1 id='inf_registro'>Nome do Video...</h1>
                                                    
                                                    <!--
                                                       <embed src="https://www.youtube.com/watch?v=u3YPNWJvdo0" type="">
                                                    -->
                                                    <iframe  class='qdo_video_principal' width="760" height="415" src="https://www.youtube.com/embed/SvyseptFqpI" 
                                                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                    </iframe>
                                            </table>
                                    </div>
                                </div>


                            <div class='container_videos'>
                                                                          
                                                    <div class='qdo_video' >
                                                        <h1>titulo video</h1>    
                                                            <iframe  onclick='exct_teste()' width="300" height="200" src="https://www.youtube.com/embed/SvyseptFqpI" 
                                                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                                                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                            </iframe>
                                                    </div>
                                                    
                                                    <div class='qdo_video'>
                                                        <h1>titulo video</h1>    
                                                            <iframe width="300" height="200" src="https://www.youtube.com/embed/SvyseptFqpI" 
                                                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                                                clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                            </iframe>
                                                    </div>

                            </div>                            

                                <!--
                                <div class="grupo_cxs col-2" id="grupo_cx_id">
                                
                                <div class='container_table'>                                            
                                
                                     <table id='table_list'  class='frmt_tabela_fretes'>
                                                <h1 id='inf_registro'>Nome do Video...</h1>

                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/SvyseptFqpI" 
                                                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                                    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                </iframe>

                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/SvyseptFqpI" 
                                                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                                    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                </iframe>
                                        </table>
                                </div>
                            </div>
                      
                      
                                                -->
                      
                      
                      </div>


           </form>

         
<?php 

    include_once('includes/scripts.php');

?>

<script>

window.addEventListener('load',inicio_app)


function inicio_app(){
   
    $('#opc_curso_list').css('display','inline-block') 
     load_table_pesquisa()


}


</script>


</body>
</html>