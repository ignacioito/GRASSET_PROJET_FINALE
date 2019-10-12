<?php
function validate_access(){
			$usuario = addslashes($_POST['usuario']);
			$senha_us = addslashes($_POST['senha_acesso']);
			
			$sql_acesso_user=$pdo->prepare("select * from tabela where user='$usuario' and senha='$senha_us'"); 
			$sql_acesso_user->execute();
			$dados_acesso_user = $sql_acesso_user->fetch(PDO::FETCH_ASSOC);
			
			//aqui no if poder fazer verificação do perfil
			if ($dados_acesso_user){ 
			$_SESSION['usuario'] = $email_us;
			$_SESSION['senha'] = $senha_us;
			$_SESSION['id'] = $dados_acesso_user['id'];
			$_SESSION['nome'] = $dados_acesso_user['nome_user'];
		    echo ("<script language='JavaScript'>window.location='sistema/index.php';</script>");
			}else{
			if ($dados_acesso_cli){ 
			$_SESSION['usuario_cli'] = $email_us;
			$_SESSION['senha_cli'] = $senha_us;
			$_SESSION['id_cli'] = $dados_acesso_cli['id'];
			$_SESSION['id_user'] = $dados_acesso_cli['id_usuario'];
			$_SESSION['nome_cli'] = $dados_acesso_cli['nome_cliente'];
			echo ("<script language='JavaScript'>window.location='sistema/cliente.php';</script>");
			} else{ echo "<center><p style='color:red;'>USU�?RIO OU SENHA INV�?LIDOS</p></center>";}
	  	   } 
	 }