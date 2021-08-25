




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

                          data_return = JSON.parse(retorno) 
                          dados_ret_temp =  data_return
                                           

                           mont_table()

                    }

                })


}




function mont_table(){


	var cod = 1	
	let itm = 0
	// var new_table = document.querySelector('.frmt_tabela_fretes')
	 tbl = '';	
	 tbl +='<tr class="header_table">'	
	 tbl +='<th>Categoria / Tipo</th>'
	 tbl +='<th>Descrição</th>'
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
					
						
			tbl +='</tr>'

			cod++;
			itm ++;	
			

	}



	

	$('#table_list').html(tbl);
    $('#inf_registro').html(`Registros Listados: ${itm}`);


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
