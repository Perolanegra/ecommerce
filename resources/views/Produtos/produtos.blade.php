<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Produtos</title>

	@include('components.carregaCss')
</head>
<body>
	{{-- {{dd($produtos)}} --}}
	<!--================ Start Header Area =================-->
	@include('components.cabecalho')
	<!--================ End Header Area =================-->

	<!--================ Start banner Area =================-->
    @include('components.listaProduto')
</body>

</html>