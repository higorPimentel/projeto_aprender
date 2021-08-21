<?php 

    session_start();

    
    $_SESSION['title_page'] = 'Login';
    include_once('includes/topo.php');
     include_once('includes/header.php');

?>

<body>

    <div class='container_principal'>

            <h1 id='tit-log'>Bem-Vindo</h1>

                    <form class="frm_registro frm_login"> 
                                        <div class="row">	
                                                <div class="grupo_cxs col-6">
                                                    <label class='lb'>Login</label>
                                                    <input class="cx_text" type="text" id="cx_user" autofocus>											
                                                </div>	
                                        </div>

                                        <div class="row">	
                                                <div class="grupo_cxs col-6" >
                                                    <label class='lb'>Senha</label>
                                                    <input class="cx_text" type="password" id="cx_senha">											
                                                </div>	
                                        </div>

                                        <div class='barra_separa'></div>

                                        <div class="row">	
                                                <div class="grupo_cxs col-3" >                                                   
                                                    <input class='btns' id ='btn_exect_log' type="button" value='Confirmar'>	
                                                </div>	
                                                <div class="grupo_cxs col-3" >                                                   
                                                      <input class='btns'  id='btn_reset_senha' type="button" value='Esqueci a Senha'>	
                                                </div>	

                                              
                                        </div>

                            </form>


                </div>


<?php 

    include_once('includes/scripts.php');

?>

<script>

    let cx_text_foco = document.querySelector(".frm_registro")
    cx_text_foco.addEventListener('focus', insere_foco_txt,true)
    cx_text_foco.addEventListener('blur', remove_foco_txt,true)


    let btn_exect_log = document.querySelector("#btn_exect_log")
    btn_exect_log.addEventListener('click', exect_log,true)

</script>



</body>
</html>