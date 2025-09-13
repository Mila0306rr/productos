<?php
$producto1 = $_POST['producto1'];
$precio1 = $_POST['precio1'];

$producto2 = $_POST['producto2'];
$precio2 = $_POST['precio2'];

$producto3 = $_POST['producto3'];
$precio3 = $_POST{'precio3'];

$suma = $precio1 + $precio2 + $precio3;
$descuento = $suma * 0.16;
$total = $suma - $descuento;

  echo "<h2>Productos Registrados</h2>"
  echo "El producto 1 es: $producto1 y su precio es : $precio1.";
  echo "El producto 2 es: $producto2 y su precio es: $precio2.";
  echo "El producto 3 es: $producto3 y su precio es: $precio3.";
  echo "El total de tu compra es: $total.";
