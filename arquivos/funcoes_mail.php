
    <?php
            
            function TratarDados($str){
                    $str = trim($str);
                    $str = strip_tags($str);
                    $caracters = array("&", "%");
                    $str = str_replace($caracters, "", $str);
                    return $str;
            }
            
            function ValidarString($string, $erro){
                    $string = TratarDados($string);
                    if(empty($string)){
                        echo '<script type="text/javascript">alert("'.$erro.'")</script>';
                        echo '<script type="text/javascript">history.back()</script>';
                        exit;
                    }
                    return $string;
            }
            
            function ValidarEmail($email){
                    $email = TratarDados($email);
                    if(empty($email)){
                        echo '<script type="text/javascript">alert("Preencha o campo E-mail")</script>';
                        echo '<script type="text/javascript">history.back()</script>';
                        exit;
                    }
                    elseif(substr_count($email, "@") !== 1 || substr_count($email, ".") == 0){
                        echo '<script type="text/javascript">alert("Preencha com um e-mail válido")</script>';
                        echo '<script type="text/javascript">history.back()</script>';
                        exit;
                }
                return $email;
            }
            
            
            function EnviarEmail($destino, $rementente, $titulo, $msg){
                    $headers  = "MIME-Version: 1.0\n";
                    $headers .= "Content-Type:text/html; charset=iso-8859-1\n";
                    $headers .= "From: $rementente\n";
                    $headers .= "Return-Path: $rementente";
                    return mail($destino, $titulo, $msg, $headers);
            }
			
			
            
    ?>
