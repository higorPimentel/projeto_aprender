let cx_text_foco = document.querySelector(".frm_registro")


cx_text_foco.addEventListener('focus', insere_foco_txt,true)
cx_text_foco.addEventListener('blur', remove_foco_txt,true)




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