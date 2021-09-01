

function exect_log(){
    
        let user = $('#cx_user').val()
        let password = $('#cx_senha').val()
        let type_request = 1;

       


            if(user == '' || password == '') {
                $('#msg_erro').html('Preencha um nome de usuário e senha para prosseguir!!');
                exibe_erro()
                return
            }


            $.ajax({
                method:'POST',
                url:'class/functions.php',
                data:
                {
                    type_request:type_request,
                    user:user,
                    password:password
                },
                success:function(retorno){

                    console.log(retorno)
                       
                        if(retorno ==0) {
                            $('#msg_erro').html('Usuário não Localizado!!');
                            exibe_erro()
                        } else if(retorno ==2) {
                            $('#msg_erro').html('Senha Incorreta!!');
                            exibe_erro()
                        }  else if(retorno ==1) { 
                            window.location.href = 'page_pesquisa.php?idx=1'

                        }

                }

            })


}



function load_table_pesquisa(){

    
            let type_filter = 'todos';
            let x = part_txt = window.location.href
            let y = x.indexOf('page_')
            let y2 = x.indexOf('php')
            let z = x.substr(y + 5,y2 - y - 6 )    



                if(z == 'pesquisa') {
                     type_request = 2;
                     idx_acces='id_pesquisa'
                } else if(z == 'livros') {
                    type_request = 4;
                    idx_acces='id_livro'
                } else if(z == 'cursos') {
                    type_request = 5;
                    idx_acces='id_curso'
                } else if(z == 'videos') { 
                    type_request = 5;
                    idx_acces='id_video'
                }

                
                $.ajax({
                    method:'POST',
                    url:'class/functions.php',
                    data:
                    {
                        type_request:type_request,
                        type_filter:type_filter
                    
                    },
                    success:function(retorno){

                        
                               // console.log(retorno)
                               // return
                        
                          data_return = JSON.parse(retorno) 
                          dados_ret_temp =  data_return
                                           

                          if(idx_acces =='id_video') {
                            mont_table_video()
                          } else {
                            mont_table()
                          }

                         

                    }

                })


}



function mont_table(){


            let page_atual = window.location.href
            let pagina_proc = 'page_pesquisa'
            let x_index = page_atual.indexOf(pagina_proc)

            let pagina_proc2 = 'page_livros'
            let x_index2 = page_atual.indexOf(pagina_proc2)



             console.log(dados_ret_temp)

                   

	var cod = 1	
	let itm = 0
	// var new_table = document.querySelector('.frmt_tabela_fretes')
	 tbl = '';	
	 tbl +='<tr class="header_table">'	
	 tbl +='<th>Categoria / Tipo</th>'
	 tbl +='<th>Descrição</th>'

            if(x_index > 3) {
                tbl +='<th>Opções</th>'
            }

            if(x_index2 > 3) {
                tbl +='<th>Download</th>'
            }

	 tbl +='</tr>'
	
	
	for(let i = 0; i < dados_ret_temp.length; i++) {

				if (cod === 3) {
					cod = 1
				}
				

				if (cod === 1) {
					var cls = 'styline_line_table_1'
				} else if (cod === 2) {
					var cls = 'styline_line_table_2'
				}


              
			tbl +=`<tr class="${cls}">`																	//altera =2	
			tbl +=`<td id=it${dados_ret_temp[i][idx_acces]}>${dados_ret_temp[i]['tipo_categoria']}</td>`
			tbl +=`<td id=it${dados_ret_temp[i][idx_acces]}>${dados_ret_temp[i]['descricao']}</td>`
					
                 if(x_index > 3) {
                      tbl +=`<td>
                                <div onclick="seleciona_video_reg(this)" class="bloco_ico_list"  id=it${dados_ret_temp[i][idx_acces]}>
                                    <img src='ico/ico_video.svg'>
                                </div>
                                <div class="bloco_ico_list">
                                <img src='ico/ico_download_file.svg'>
                            </div>
                            </td>`    
                 }

                 if(x_index2 > 3) {
                    tbl +=`<td onclick="seleciona_reg_link(this)" id=it${dados_ret_temp[i][idx_acces]}>                             
                              <div class="bloco_ico_list">                                
                                 <img src='ico/ico_download_file.svg'>
                          </div>
                          </td>`    
               }

			tbl +='</tr>'

			cod++;
			itm ++;	
			

	}


	$('#table_list').html(tbl);
    $('#inf_registro').html(`Registros Listados: ${itm}`);


}

function mont_table_video(){   	

   
    tbl_video = '';	
	
    for (let i = 0; i < dados_ret_temp.length; i++) {

        tbl_video +='<div class="qdo_video">'	
        tbl_video +=`<h1 class='tit_video_min'>${dados_ret_temp[i].descricao}</h1>`
        tbl_video +=`<iframe class='video_min' width="250" height="150" src="${dados_ret_temp[i].url_video}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
        tbl_video +=`<input onclick="seleciona_reg_table_video(this)" class="btn_video" id=${dados_ret_temp[i].url_video} name="${dados_ret_temp[i].descricao}" type="button" value="Acessar Video">`
        tbl_video +='</div>'	
        
    }
    

     $('.container_videos').html(tbl_video);

}

function execut_logof(){

  
    let type_request = 3;

    $.ajax({
        method:'POST',
        url:'class/functions.php',
        data:
        {
            type_request:type_request
                    
        },
        success:function(retorno){

                window.location.href = 'login.php'
        }

    })

}




function exibe_erro(){
	$('#msg_erro').css('display','block')
	setTimeout(desabilita_erro,4000)
}

function desabilita_erro(){
	$('#msg_erro').css('display','none')
}

function exibe_sucess() {
	$('#msg_sucesso').css('display','block')
	setTimeout(desabilita_sucess,4000)
}

function desabilita_sucess(){
	$('#msg_sucesso').css('display','none')
}

function exibe_duvida() {
	$('#msg_alerta').css('display','block')
	setTimeout(desabilita_duvida,4000)
}

function desabilita_duvida(){
	$('#msg_alerta').css('display','none')
}
