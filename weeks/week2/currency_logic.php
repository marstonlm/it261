<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency Logic</title>
<style>
  table{
    width: 400px;
    margin: 20px auto;
    border: 1px solid green;
    border-collapse: collapse;
  }

  td, th {
    border: 1px solid green;
    padding: 5px;
    text-align: left;
  }
</style>
</head>

<body>
  <table>
    <tr>
      <th>Rubles</th>
      <td>$130.09</td>
    </tr>

    <tr>
      <th>Pound</th>
      <td>$640.00</td>
    </tr>

    <tr>
      <th>Canadian</th>
      <td>$3950.00</td>
    </tr>

    <tr>
      <th>Euros</th>
      <td>$1416.00</td>
    </tr>

    <tr>
      <th>Yen</th>
      <td>$18.80</td>
    </tr>

    <tr>
      <th>Total</th>
      <td><strong>$6154.89</strong></td>
    </tr>
  </table>
</body>
</html>


<?php
// ------ understanding the logic!! ------
/* 
1 ruble = 0.0.13 USD
1 pound sterling = 1.28 USD
1 canadian = 0.79 USD
1 euro = 1.18 USD
1 yen = 0.0094 USD
*/

/* 
ruble = 1007
pound sterling = 500
canadian  = 5000
euro = 1200
yen =  2000
*/

echo '<br>';

?>
