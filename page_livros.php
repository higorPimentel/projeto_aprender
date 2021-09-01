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

let table_select = document.querySelector("#table_list")
table_select.addEventListener('click', seleciona_reg_table,true)



function inicio_app(){
   
     load_table_pesquisa()

}

function seleciona_reg_table(event){
	

	let elemnt =  event.srcElement.id
	let  type_element  = elemnt.substr(0,2)


        if(type_element =='it') { 
			id_list = elemnt.substr(2,11)      
            
                     
               window.location.href = dados_ret_temp[id_list - 1].link_download
               
                $('#msg_alerta').html('Download efetuado com exito &#10003;');
                exibe_duvida()              

        }
        

    }


function seleciona_reg_link(obj) {
    
            let elemnt = obj.id
            let  type_element  = elemnt.substr(0,2)


                if(type_element =='it') { 
                    id_list = elemnt.substr(2,11)      
                    
                            
                    window.location.href = dados_ret_temp[id_list - 1].link_download
                    
                        $('#msg_alerta').html('Download efetuado com exito &#10003;');
                        exibe_duvida()              

                }


}


</script>


</body>
</html>