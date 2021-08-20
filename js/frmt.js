
let ico_opcoes = document.querySelector("#ico_opcoes")
ico_opcoes.addEventListener('click', exibe_menu_opc,true)



function exibe_menu_opc(){

    $('#container_menu_opc').css('display','block')
  
}



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