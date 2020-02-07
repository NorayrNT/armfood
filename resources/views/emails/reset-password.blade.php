<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
<body>
	@if($data)
		<div >
			<h3>Ваш пароль был успешно изменен.</h3>
            <p>Вы можете изменить нынешний пароль из вашего аккаунта.</p>
			<p>Ваш новый пароль : {{ $data[0] }}</p>
		</div>
	@endif
</body>
</html>