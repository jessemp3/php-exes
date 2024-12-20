<?php
 echo "<table>
    <tr>
      <th >prato</th>
      <th >calorias</th>
      <th >sobremesa</th>
      <th >calorias</th>
      <th>Bebidas</th>
      <th>calorias</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th >Vegetariano</th>
      <td> 180cal</td>
      <td>abacaxi</td>
      <td>75cal</td>
      <td>chá</td>
      <td>20cal</td>
    </tr>
    <tr>
      <th >peixe</th>
      <td>230cal</td>
      <td>sorvete diet</td>
      <td>110cal</td>
       <td>suco de laranja</td>
        <td>70cal</td>
    </tr>
    <tr>
      <th>frango</th>
      <td>250cal</td>
      <td>mouse diet</td>
        <td>170cal</td>
        <td>suco de melão</td>
        <td>100cal</td>
    </tr>
    <tr>
      <th >carne</th>
      <td>350cal</td>
      <td>mouse chocolate</td>
        <td>200cal</td>
        <td>refrigerante diet</td>
        <td>65cal</td>
    </tr>
  </tbody>
</table>";


 $vegetariano = 180 + 75 + 20;
 $peixe = 230 + 110 + 70;
 $frango = 250 + 170 + 100;
 $carne = 350 + 200 + 65;


echo 'Escolha o prato desejado: 1-vegetariano, 2-peixe, 3-frango, 4-carne: <br>';
$escolha =  '4';

 switch ($escolha){
     case '1':
         echo "O prato vegetariano tem $vegetariano calorias";
         break;
     case '2':
         echo "O prato de peixe tem $peixe calorias";
         break;
     case '3':
         echo "O prato de frango tem $frango calorias";
         break;
     case '4':
         echo "O prato de carne tem $carne calorias";
         break;
 }

?>
