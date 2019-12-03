<?php include "header.php"?>
<head>
<title>Menu Order</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="JavaScript">
function checkChoice(whichbox){
 with (whichbox.form){
  if (whichbox.checked == false)
   hiddentotal.value = eval(hiddentotal.value) - eval(whichbox.value);
  else
   hiddentotal.value = eval(hiddentotal.value) + eval(whichbox.value);
   return(formatCurrency(hiddentotal.value));
 }
}
function formatCurrency(num){
 num = num.toString().replace(/\$|\,/g,'');
 if(isNaN(num)) num = "0";
  cents = Math.floor((num*100+0.5)%100);
  num = Math.floor((num*100+0.5)/100).toString();
 if(cents < 10) cents = "0" + cents;
  for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
  num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));
  return ("Rp. " + num + "," + cents);
}
</script>
<body>
	<div class="kotak_login">
<center>
<form name=myform><table width="335" border="0">
  <tr>
    <td colspan="6" align="center"><strong>Daftar Menu & Harga</strong></td>
    </tr>
  <tr>
    <td>Makanan</td>
    <td> </td>
    <td align="right"> </td>
    <td align="center"> </td>
  </tr>
  <tr>
    <td width="156">Jus Alpukat</td>
    <td width="29">Rp. </td>
    <td width="99" align="right">10.000</td>
    <td width="33" align="center"><input type=checkbox  value="10000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td>Green Tea Latte</td>
    <td>Rp.</td>
    <td align="right">40.000</td>
    <td align="center"><input type=checkbox  value="40000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td>Jus Mangga</td>
    <td>Rp.</td>
    <td align="right">10.000</td>
    <td align="center"><input type=checkbox  value="10000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td>Tuna Sandwich</td>
    <td>Rp.</td>
    <td align="right">45.000</td>
    <td align="center"><input type=checkbox  value="45000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td>Air Mineral</td>
    <td>Rp.</td>
    <td align="right">8000</td>
    <td align="center"><input type=checkbox value="8000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td>Ayam Goreng</td>
    <td>Rp.</td>
    <td align="right">12.000</td>
    <td align="center"><input type=checkbox  value="12000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>

    <td colspan="4"> </td>
  </tr>
  <tr>
    <td>Nasi Goreng Spesia</td>
    <td>Rp.</td>
    <td align="right">20.000</td>
    <td align="center"><input type=checkbox value="20000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td>Nasi Goreng Biasa</td>
    <td>Rp.</td>
    <td align="right">15.000</td>
    <td align="center"><input type=checkbox  value="15000" onClick="this.form.total.value=checkChoice(this);"></td>
  </tr>
  <tr>
    <td colspan="3" align="right">Total :
      <input type="text" name="total" value=""  >
      <input type=hidden name=hiddentotal value=0></td>
  </tr>
</table>
</form>
</center>
<br>
<hr>
<br>
<form action="" method="POST">
 Bilangan 1 : <input type="text" name="bilangan1">
 <select name="pilih">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
                <option value="/">/</option>
 </select>
 Bilangan 2 : <input type="text" name="bilangan2"><br><br>
 <input type="submit" name="hitung" value="Hitung">
 <form action="" method="get"><input value="Refresh" type="submit"/></form>
 </form>

<?php  
 if(isset($_POST['hitung'])){
  $bil1 = $_POST['bilangan1'];
  $bil2 = $_POST['bilangan2'];
  $pilih = $_POST['pilih'];

  if($pilih){
   if($bil1 == "" || $bil2 == ""){
    ?> <script>alert("Nilai nya belum diisi!"); </script> <?php
   }elseif($pilih == '+'){
    $hasil = $bil1 + $bil2;
    echo "Rp ".$hasil;
   }elseif($pilih == '-'){
    $hasil = $bil1 - $bil2;
    echo "Rp  ".$hasil;
   }elseif($pilih == '*'){
    $hasil = $bil1 * $bil2;
    echo "Rp ".$hasil;
   }elseif($pilih == '/'){
    $hasil = $bil1 / $bil2;
    echo "Rp ".$hasil;
   }
  }
 }
?>

</div>


</body>
</div>>
</html>