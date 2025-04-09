
    <?php
	
	       header("Content-Type: text/html;  charset=ISO-8859-1",true);
			
			
			
            if(isset($_POST['acao']) && $_POST['acao'] == 'enviar'){
                require("arquivos/funcoes_mail.php");
                
                $nome      = ValidarString($_POST['nome'], "Preencha o campo Nome");
                $email     =  ValidarEmail($_POST['email']);
                $titulo    = ValidarString($_POST['titulo'], "Preencha o campo Titulo");
                $mensagem  = ValidarString($_POST['mensagem'], "Preencha o campo Mensagem");
                
                $msg = "<strong>Nome </strong>: $nome <br /> 
                        <strong>E-mail </strong>: $email <br /> 
                        <strong>Titulo </strong>: $titulo <br /> 
                        <strong>Mensagem </strong>: $mensagem <br />
                        <strong>Enviado em </strong>: ".date("d-m-Y H:i:s");
                
                           //DIGITE SEU EMAIL        
                $destino = "viseemi@gmail.com";
                            //O TITULO DA MENSAGEM

                $titulo = "Contacto";
                if(EnviarEmail($destino, $email, $titulo, $msg)){
                    echo '<script type="text/javascript">
                            alert("Su mensaje ha sido enviado con éxito!")
                            window.location="index.php";
                         </script>';
                         
                }else{
                    echo '<script type="text/javascript">
                            alert("Sr(a), '.$nome.', sua mensagem não foi enviada")
                          </script>';
                }
        }
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Contato</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
            
            <form action="contatoespanol.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend style="font-weight:bold" align="left">Contacto</legend>
                        
                        <label>
                             <span>Nombre:</span>
                             <input type="text" name="nome" />
                        </label>
                        
                        <label>
                             <span>E-mail:</span>
                             <input type="text" name="email" />
                        </label>
                        
                        <label>
                             <span>Sujeto:</span>
                             <input type="text" name="titulo" />
                        </label>
                        
                          <label>
                             <span>Mensaje:</span>
                             <textarea name="mensagem" cols="30" rows="5"></textarea>
                        </label>
                        <input type="hidden" name="acao" value="enviar" />
                        <input type="submit" value="Enviar"  class="btn"/>
                           </fieldset>  
                                          
            
            </form>
    </body>
    </html>
