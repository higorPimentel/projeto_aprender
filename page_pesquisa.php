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

           <div class='container_video_pesq'>
                <div class='bloc_video'>
                     <div id='btn_fechar_video'>Fechar</div>
                         <div id='container_video_pesquisa'>   
                         <h1 class='tit_video_min'>Titulo</h1>                      

                        </div> 
                </div>

           </div>

         
<?php 

    include_once('includes/scripts.php');

?>

<script>

    
let btn_fechar_video = document.querySelector("#btn_fechar_video")
btn_fechar_video.addEventListener('click', fechar_video_pesquisa,true)


window.addEventListener('load',inicio_app)


function inicio_app(){
   
    load_table_pesquisa()

}

function seleciona_video_reg(obj){
    


            let elemnt = obj.id
            let  type_element  = elemnt.substr(0,2)


         
                if(type_element =='it') { 
                    id_list = elemnt.substr(2,11) - 1      

                    console.log(data_return)  
                            
                            
                    $('.container_video_pesq').css('display','block');  


                    tbl_video = '';	

                    tbl_video +='<div class="qdo_video">'	
                    tbl_video +=`<h1 class='tit_video_min'>${data_return[id_list].descricao}</h1>`
                    tbl_video +=`<iframe class='video_min' width="600" height="315" src="${data_return[id_list].url_video}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`                  
                    tbl_video +='</div>'	            

                     $('#container_video_pesquisa').html(tbl_video);

                }

}


</script>


</body>
</html>