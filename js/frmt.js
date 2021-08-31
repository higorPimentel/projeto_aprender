
let ico_opcoes = document.querySelector("#ico_opcoes")
ico_opcoes.addEventListener('click', exibe_menu_opc,true)

ico_opcoes.addEventListener('mousemove', modify_menu,true)
ico_opcoes.addEventListener('mouseout', modify_menu_ret,true)


let opc_sub_menu = document.querySelector(".opc_sub_menu")
opc_sub_menu.addEventListener('click', acessa_item_menu,true)


let opc_profile = document.querySelector("#opc_profile")
opc_profile.addEventListener('mousemove', modify_profile,true)
opc_profile.addEventListener('mouseout', modify_profile_ret,true)
opc_profile.addEventListener('click', exib_opc_profil,true)

let btn_fechar_profile = document.querySelector("#btn_fechar_profile")
btn_fechar_profile.addEventListener('click', remove_men_prof,true)


let foco_pesquisa = document.querySelector(".blco_pesquisa")
foco_pesquisa.addEventListener('focus', insere_foco_txt,true)
foco_pesquisa.addEventListener('blur', remove_foco_txt,true)


let btn_pesquisa = document.querySelector("#btn_pesquisa")
btn_pesquisa.addEventListener('click', filter_item,true)


let cx_pesquisa = document.querySelector("#cx_pesquisa")
cx_pesquisa.addEventListener('keyup', clear_filter,true)




window.addEventListener('load',inicio_app)



function inicio_app(){
   
    ativ_menu = 0
    type_filter = 1
    nme_opc = ""
  //  index_page  = 5
    

}


function exct_teste(){
    alert('ola')
}

function clear_filter(){
    
    let pesquisa =   $('#cx_pesquisa').val()

        if(pesquisa == '') {

            dados_ret_temp =  data_return
           mont_table()
        }


}

function exib_opc_profil(){
 
    $('.opcs_prof').css('display','block')  
    $('#btn_fechar_profile').css('display','inline-block')    
    
}

function remove_men_prof() {
    
    $('.opcs_prof').css('display','none')  
    $('#btn_fechar_profile').css('display','none')    
}




function modify_profile_ret(){
    
    $('#opc_profile').css('color','#828282')    
    $('#opc_profile').css('transition','0.5s')

}


function modify_profile(){

    $('#opc_profile').css('color','#CDB5CD')    
    $('#opc_profile').css('transition','0.5s')
     
}


function acessa_item_menu(event) {

     elemnt =  event.target.id
    let  type_element  = elemnt.substr(0,3)
 
   
    if(type_element =='opc') {

           reinicia_opcoes_menu()        
           $(`#${elemnt}`).html(`&#10162; ${nme_opc}`) 

           filter_type()
        
       
        }
   

}

function filter_type() {

    dados_ret_temp = []

    for( n= 0; n < data_return.length; n++ ) {

            if( data_return[n].tipo_categoria ==   nme_opc) {
                dados_ret_temp.push(data_return[n])
            }   

    }

        if(type_filter ==1 ) {
            dados_ret_temp = data_return
        }

        mont_table()
  
}

function filter_item(){

    let txt_pesquisa = $('#cx_pesquisa').val()


    dados_ret_temp = []

    for( n= 0; n < data_return.length; n++ ) {

         

            let item_desc = data_return[n].descricao.toUpperCase()
            let inst = item_desc.indexOf(txt_pesquisa.toUpperCase())

            if( inst >= 0) {
                    dados_ret_temp.push(data_return[n])
                }   

             }


       mont_table()

}


function reinicia_opcoes_menu(){

     $('#opc_todos').html('&#10148; Categorias') 
     $('#opc_hortalica').html('&#10148; Hortaliça') 
     $('#opc_culinaria').html('&#10148; Culinária') 
     $('#opc_erva_medic').html('&#10148; Plantas Medicinais') 


        if(elemnt == 'opc_todos') {
            type_filter = 1
            nme_opc = 'Categorias'
        } else if(elemnt == 'opc_hortalica') {
            type_filter = 2
            nme_opc = 'Hortaliça'
        } else if(elemnt == 'opc_culinaria') {
            type_filter = 3
            nme_opc = 'Culinária'
        } else if(elemnt == 'opc_erva_medic') {
            type_filter = 4
            nme_opc = 'Plantas Medicinais'
        }

 
}


function modify_menu_ret(){


    if(ativ_menu ==0) {

        $('#ico_exibe_menu').css('border','none')
        $('#ico_exibe_menu').css('backgroundColor','rgba(255, 255, 255, 0)')

    } else {

        $('#ico_fechar_menu').css('border','none')
        $('#ico_fechar_menu').css('backgroundColor','rgba(255, 255, 255, 0)')

    }

}

function modify_menu(){

    if(ativ_menu ==0) {

           
    $('#ico_exibe_menu').css('border','solid 1px #CFCFCF')
    $('#ico_exibe_menu').css('backgroundColor','#E8E8E8')

    } else {

                   
    $('#ico_fechar_menu').css('border','solid 1px #CFCFCF')
    $('#ico_fechar_menu').css('backgroundColor','#E8E8E8')

    }

}


function exibe_menu_opc(){

    
    ativ_menu ++;
    

        if(ativ_menu == 1) {
            $('#container_menu_opc').css('display','block')
            $('#ico_exibe_menu').css('display','none')
            $('#ico_fechar_menu').css('display','block')
           
        } else if(ativ_menu == 2) {

            $('#container_menu_opc').css('display','none')
            $('#ico_exibe_menu').css('display','block')
            $('#ico_fechar_menu').css('display','none')
            ativ_menu  = 0;
        }

   
  
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