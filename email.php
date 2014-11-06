<?php 

session_start();

require_once 'email/PHPMailerAutoload.php';

$errors = [];

if (isset($_POST['subject'], $_POST['email'], $_POST['msg'])) {

	$inputs = [
		'tema' => $_POST['subject'],
		'correo' => $_POST['email'],
		'mensaje' => $_POST['msg']
	];

	foreach ($inputs as $key => $value) {
		if (empty($value)) {
			$errors[] = 'Falta ' . $key . ' para poder mandar correo.';
		}
	}

	if (empty($errors)) {
		$m = new PHPMailer;

		$m -> isSMTP();
		$m -> SMTPAuth = true;

		$m->Host       = 'smtp.gmail.com';
		$m->Username   = 'ehaliseda@gmail.com';
		$m->Password   = '1fancygoogle';
		$m->SMTPSecure = 'ssl';
		$m->Port       = 465;

		$m->isHTML();

		$m->Subject    = 'OrganizaT Pagina - Eduardo es tu hijo favorito';
		$m->Body       = 'Subject: ' . $inputs['tema'] . ' From: (' . $inputs['correo'] . ')<p>' . $inputs['mensaje'] . '</p>';

		$m->FromName    = 'Contact';

		$m->AddAddress('ehaliseda@gmail.com', 'Eduardo Hernandez');

		if ($m->send()) {
			header('Location: organizat-cfdi.php');
			echo "<h1>sent</h1>";

		} else{
			echo "Sorry Could not send try again later";
		}



	}

} else {
	$errors[] = 'shit went down';
}
$_SESSION['errors'] = $errors;
$_SESSION['inputs'] = $inputs;

header('Location: organizat-cfdi.php');

 ?>