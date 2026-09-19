<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="UTF-8">
<title>Contas</title>
</head>
<body>
<h1>Contas Bancárias</h1>
<table border="1">
<tr>
<th>Titular</th>
<th>Saldo</th>
</tr>
<?php foreach($contas as $conta){ ?>
<tr>
<td><?php echo $conta->getTitular(); ?></td>
<td>R$ <?php echo $conta->consultarSaldo(); ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>

