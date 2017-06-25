<?php

$mailTo = "mr.kymman@gmail.com";
$sitename = "iamden.xyz";

$name = $phone = $email = $comment = "";

function clean($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
};

$name = clean($_POST["name"]);
$phone = clean($_POST["phone"]);
$email = clean($_POST["email"]);
$comment = clean($_POST["text"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";

$errorArray = array('name' => 'correctTxt', 'email' => 'correctTxt', 'text' => 'correctTxt', 'success' => '');

if(isset($_POST)) {
	if(empty($name) || preg_match("/[^а-ртуфхцчшщъыьэюяА-ЯёЁa-zA-Z0-9\- ]/",$name)) {
		$errorArray['name'] = 'errorTxt';
	}
	if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		$errorArray['email'] = 'errorTxt';
	}
	if(empty($comment)) {
		
		$errorArray['text'] = 'errorTxt';
	}

	if($errorArray['name'] !== 'errorTxt' && $errorArray['email'] !== 'errorTxt' && $errorArray['text'] !== 'errorTxt') {
	
		$headers = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/html; charset=UTF-8";
		$headers[] = "From: $name <$email>";
		$headers[] = "X-Mailer: PHP/" . phpversion();
		$message = "<p><b>Имя:</b> $name</p>
								<p><b>Телефон:</b> $phone</p>
								<p><b>E-mail:</b> $email</p>
								<p><b>Сообщение:</b> $comment</p>";
		$message = "<html><head><title>Обратная связь</title>
								<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=UTF-8\"></head>
								<body>" . $message . "</body></html>";
		if (!mail($mailTo, $pagetitle, $message, implode("\r\n", $headers))) {

			$errorArray['success'] = 'Письмо не отправлено - что-то не сработало';

			//echo json_encode($errorArray);
		} else {
			$errorArray['success'] = 'Ваша заявка успешно отправлена!';
		}
	}

	echo json_encode($errorArray);
}






?>