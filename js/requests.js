

let btn_exect_log = document.querySelector("#btn_exect_log")
btn_exect_log.addEventListener('click', exect_log,true)



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
                       
                        if(retorno ==0) {
                            $('#msg_erro').html('Usuário não Localizado!!');
                            exibe_erro()
                        } else if(retorno ==2) {
                            $('#msg_erro').html('Senha Incorreta!!');
                            exibe_erro()
                        }  else if(retorno ==1) { 
                            window.location.href = 'page_pesquisa.php'

                        }

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
	setTimeout(desabilita_duvida,timr_duvida)
}

function desabilita_duvida(){
	$('#msg_alerta').css('display','none')
}
