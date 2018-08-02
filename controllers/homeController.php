<?php
    class homeController extends controller {

        public function index() {
            $dados = array();

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
            	if(isset($_POST['email']) && !empty($_POST['email'])){
            		$nome = addslashes($_POST['nome']);
            		$email = addslashes($_POST['email']);
            		$msg = addslashes($_POST['mensagem']);

            		$s = new Contatos();
            		$s->addContato($nome, $email, $msg);
               		echo '<h4 style="text-align:center;">Mensagem enviados com sucesso, Obrigado !</h4>';
   
            	}
            } 

            
            $this->loadView('home', $dados);
        }
    }
?>