<div class='header_sistema'>
    
 
            <div  id='container_ico'>
                <div id='ico_opcoes'>
                        <div id='ico_exibe_menu'>
                                <div class='barr_menu'></div>
                                <div class='barr_menu'></div>
                                <div class='barr_menu'></div>
                        </div>
                        <div id='ico_fechar_menu'>
                              &#10007;
                        </div>
                </div>    
                <div id='ico_logo'>
                    <!--
                   <img id='img_logo' src="ico/icon.svg" alt="">
-->
                </div>          

            </div>
                

            <div id='cont_cx_pesquisa'>
                <div class="row blco_pesquisa">	
                        <div class="grupo_cxs col-6">
                            <input class="cx_text" type="text" id="cx_pesquisa" autofocus placeholder='Pesquisar descrição'>	
                            <input type="button" id="btn_pesquisa" value='&#128269;' >										
                        </div>	
                </div>
            </div>    
      
             <nav class='opc_menu'>
                    <ul>
                        <li id='opc_profile'>
                          <img src="ico/icone_profile.svg" >    
                        <?php echo($_SESSION['user_name'])?></li>     
                        <li id='btn_fechar_profile'>x</li>                
                    </ul>
                
           </nav>
        
                  

        <nav class='opc_sub_menu'>
            <ul>
                <li id='opc_todos'>&#10162; Todos</li>
                <li id='opc_hortalica'>&#10148; Hortaliça</li>
                <li id='opc_culinaria'>&#10148; Culinária</li>
                <li id='opc_erva_medic'>&#10148; Plantas Medicinais</li>               
            </ul>
        </nav>

           <div class='opc_btns_2'>     
               <a href="page_videos.php"><div id='opc_curso_video' class='opc_curso_btns'>Curso em Video &#10148;</div></a>
               <a href="page_cursos.php"><div id='opc_curso_list' class='opc_curso_btns'>Curso em Listagem (Download) &#10148;</div></a>
          </div>
      <!-- 
       <div id='opc_curso_listagem'>Curso em Video</div>
         -->

    

</div>

                    <div class='opcs_prof'>
                        <div id='opc_profile_exit' onclick ='execut_logof()' >Sair</div>                                    
                    </div>
    <script>

/*
            let cx_text_foco = document.querySelector(".blco_pesquisa")
            cx_text_foco.addEventListener('focus', insere_foco_txt,true)
            cx_text_foco.addEventListener('blur', remove_foco_txt,true)

            let cx_pesquisa = document.querySelector("#cx_pesquisa")
            cx_pesquisa.addEventListener('focus', insere_foco_txt,true)
            

 function insere_foco_txt(event){
    
    let elemnt =  event.srcElement.id
    let  type_element  = elemnt.substr(0,2)
 
    
   
    if(type_element =='cx') {
        
           $(`#${elemnt}`).css('box-shadow','0px 0px 10px  #CDB5CD')
 
        
        }
         
 
 }
 
 function remove_foco_txt(event){
     
     let elemnt =  event.srcElement.id
     let  type_element  = elemnt.substr(0,2)
  
     
     
     if(type_element =='cx') {
          $(`#${elemnt}`).css('box-shadow','none')
          
        
          
      }
}
*/
    </script>