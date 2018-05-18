<?php

	$user = new user();
	if (!empty($_POST['mail'])) {
		$query = "select * from anuki where mail='".$_POST['mail']."'";
		if($result = mysql_query($query)) {
			$arr = mysql_fetch_array($result);
			if(!empty($arr)) {
				$message[] = 'მომხმარებელი ამ E-mail-ით უკვე დარეგისტრირებულია';
			} else {
				$user->setMail($_POST['mail']);
			}
		}
	} 
	else { 
		$message[] = 'შეიყვანეთ E-mail';
	}
	else {
		$message[]='შეიყვანეთ Username';
	}
	
	if(empty($_POST['password'])) {
		$message[] = 'შეიყვანეთ პაროლი';
	}
	elseif($_POST['password'] != $_POST['rePassword']) {
		$message[] = 'პაროლები არ ემთხვევა';
	}
	else {
		$user->setPassword($_POST['password']);
	}
	$user->setRegDate(date('Y-m-d H:i:s'));
	
		if (empty($message)) {
		$user->addUser();
		print('<div class="alert alert-success"> რეგისტრაცია წარმატებით დასრულდა</div>');
	}
	else {
		print ('გთხოვთ სცადოთ თავიდან');
		}
	}
?>