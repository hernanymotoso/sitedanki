<?php
	class Contatos extends model{

		public function addContato($nome, $email, $msg){

			$sql = $this->db->prepare("INSERT INTO contatos (nome, email, mensagem) VALUES (:nome, :email, :mensagem)");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":mensagem", $msg);
			$sql->execute();

		}
		
	}




?>