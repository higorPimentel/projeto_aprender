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
                                                    <h1 id='inf_registro'>Video Teste...</h1>
                                                    
                                                    <!--
                                                       <embed src="https://www.youtube.com/watch?v=u3YPNWJvdo0" type="">
                                                    -->
                                                    <iframe  class='qdo_video_principal' width="90%" height="415" src="https://www.youtube.com/embed/3AGB8uovr9c" 
                                                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                    </iframe>
                                            </table>
                                    </div>
                                </div>

                            <div class='container_videos'>   

                            </div>     
                      
                      </div>


           </form>

         
<?php 

    include_once('includes/scripts.php');

?>

<script>

window.addEventListener('load',inicio_app)






function inicio_app(){

     
     $('#opc_curso_list').css('display','inline-block') 
     $('.opc_btns_2').css('margin-top','35px') 
     $('.opc_sub_menu').css('display','none') 
   //  mont_table_video()
     load_table_pesquisa()   


}

function seleciona_reg_table_video(obj){

    console.log(obj)
    
    let elemnt =  obj.id
	let  name_video  = obj.name


            tbl_video = '';
            tbl_video +=`<iframe width="90%" height="415" src="${elemnt}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
        
             $('.qdo_video_principal').css('display','none');       
             $('#table_list').html(tbl_video);
             $('#inf_registro').html(name_video);
               

}


</script>


</body>
</html>