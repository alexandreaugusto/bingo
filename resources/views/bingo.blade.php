<!DOCTYPE html>
<html>
<head>
	<title>Cartelas de bingo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<style type="text/css">
		body {
			font:28px Arial, Verdana, sans-serif;
		}

		table {
			float:left;
			margin:8px;
			border:1px solid #c3c3c3;
			padding:2px;
			/*width:30%;*/
		}

		th {
			background-color:#c1c1c1;
		}

		th, td {
			border:1px solid #c3c3c3;
			text-align:center;
			/*padding-top:15px;
			padding-bottom:15px;*/
		}
	</style>
</head>
<body>
	@foreach($bingos as $cartela)
	<table border="0" cellspacing="1" cellpadding="2">
		<tr>
			<th>B</th>
			<th>I</th>
			<th>N</th>
			<th>G</th>
			<th>O</th>
		</tr>
		@php
			$cont = 0;
			$letras = array_keys($cartela);
		@endphp
		@for($i=0;$i<5;$i++)
		<tr>
			@foreach($letras as $letra)
			<td>{!! $cartela[$letra][$i] !!}</td>
			@endforeach
		</tr>
		@endfor
	</table>
	@endforeach
</body>
</html>