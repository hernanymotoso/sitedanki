<?php
    class homeController extends controller {

        public function index() {
            $dados = array();

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
            
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $msg = addslashes($_POST['mensagem']);
                
                $para = "suporte@site.com.br";
                $assunto = "Dúvida do site";
                $mensagem = "Nome:".$nome."<br/>E-mail: ".$email."<br/>Mensagem: ".$msg;
                
                $cabecalho = 'From: suporte@site.com.br'. "\r\n".'Reply-To: '.$email. "\r\n".
                'X-Mailer: PHP/'.phpversion();
                mail($para, $assunto, $mensagem, $cabecalho);
       
                echo '<h4 style="text-align:center;">Mensagem enviados com sucesso, Obrigado !</h4>';
            }
    
               		
            	
             

            
            $this->loadView('home', $dados);
        }
    }
?>