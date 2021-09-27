<?php
	$product = [
		'p1'=>['product id'=>1001, 'Product Name'=>'Ice Cream', 'Price TK'=>25],
		'p2'=>['product id'=>1002, 'Product Name'=>'Ruchi Chanachur', 'Price TK'=>35],
		'p3'=>['product id'=>1003, 'Product Name'=>'Bombay Sweets', 'Price TK'=>30],
        'p4'=>['product id'=>1004, 'Product Name'=>'Kurkure Chips', 'Price TK'=>15],
        'p5'=>['product id'=>1005, 'Product Name'=>'Coka Cola', 'Price TK'=>65],
        'p6'=>['product id'=>1006, 'Product Name'=>'7 UP', 'Price TK'=>60],
        'p7'=>['product id'=>1007, 'Product Name'=>'Mr Cracker', 'Price TK'=>10],
	];
	echo "<table border=1 align=center>
			<tr>
			<h1 align=center><u>PRODUCTS</u></h1>
			</tr>
			<tr>
				<td align=center><b>Product Name</b></td>
				<td align=center><b>Product ID</b></td>
				<td align=center><b>Price (TK)</b></td>
			</tr>";
	foreach ($product as $pdc) {
		echo "<tr>
				<td align=center>{$pdc['Product Name']}</td>
				<td align=center>{$pdc['product id']}</td>
				<td align=center>{$pdc['Price TK']}</td>
			</tr>";
	}
	echo "</table>"
?>
