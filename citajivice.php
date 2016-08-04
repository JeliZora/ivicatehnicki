<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stilglasanje.css">
<title>Upis</title>
</head>
<body>
</body>
</html>
<?php
include('conIvica.php');/*konekcija sa bazom*/

$myfile = fopen("HelloWorld.txt", "w") or die("Ne može da se uradi željena operacija- štampanje!");
$txt = "Tehnički pregled Triunf, Lozovik\n";
fwrite($myfile, $txt);
$txt = "\n";
fwrite($myfile, $txt);
$tekst="Na vašem vozilu su izvršene sledeće usluge:\n";
fwrite($myfile, $tekst);
$txt = "\n";
fwrite($myfile, $txt);

/* vlasnik*/
$ime=$_POST["ime"];$srednjeslovo=$_POST["srednjeslovo"];$prezime=$_POST["prezime"];
$telefon1=$_POST["telefon1"];$telefon2=$_POST["telefon2"];$adresa=$_POST["adresa"];
/* kraj za vlasnika*/

/* vozilo*/
if (empty($_POST["model"])) {$model=0;}else {$model=$_POST["model"];}
if (empty($_POST["sasija"])) {$sasija=0;}else {$sasija=$_POST["sasija"];}
if (empty($_POST["tablice"])) {$tablice=0;}else {$tablice=$_POST["tablice"];}
if (empty($_POST["km"])) {$km=0;}else {$km=$_POST["km"];$txt =" Kilometraža:".$km."km\n";fwrite($myfile, $txt);}
/* kraj za vozilo*/

 /* gume*/
 if (empty($_POST["gume"])) {$gume =0;}else {$gume=1;$txt ="\n Zamena guma: \n";fwrite($myfile, $txt);}
  if (empty($_POST["komzg"])) {$komzg =0;}else {$komzg=$_POST["komzg"];$txt =$komzg." gume";fwrite($myfile, $txt);}
 if (empty($_POST["modelzg"])) {$modelzg ="";}else {$modelzg=$_POST["modelzg"];$txt =", marke ".$modelzg;fwrite($myfile, $txt);}
 
 if (empty($_POST["gumeletnje"])) {$gumeletnje =0;}else {$gumeletnje=1;$txt ="\n Zamena guma: \n";fwrite($myfile, $txt);}
  if (empty($_POST["komlg"])) {$komlg =0;}else {$komlg=$_POST["komlg"];$txt =$komlg." gume";fwrite($myfile, $txt);}
 if (empty($_POST["modellg"])) {$modellg ="";}else {$modellg=$_POST["modellg"];$txt =", marke ".$modellg;fwrite($myfile, $txt);}
 
 if (empty($_POST["sifrg"])) {$sifrg =0;}else {$sifrg=$_POST["sifrg"];$txt =", šifra: ".$sifrg;fwrite($myfile, $txt);}
 if (empty($_POST["cenag"])) {$cenag =0;}else {$cenag=$_POST["cenag"];$txt =", cena: ".$cenag." dinara\n";
 fwrite($myfile, $txt); $txt ="\n";fwrite($myfile, $txt);}/*kraj za gume*/
 
 /*ulje*/
 if (empty($_POST["ulje"])) {$ulje =0;}else {$ulje=1;$txt ="\n  Zamena ulja \n";fwrite($myfile, $txt);}
 if (empty($_POST["kolulja"])) {$kolulja =0;}else {$kolulja=$_POST["kolulja"];$txt =$kolulja.", litara";fwrite($myfile, $txt);}
 if (empty($_POST["markaulja"])) {$markaulja =0;}else {$markaulja=$_POST["markaulja"];$txt =", marke ".$markaulja;fwrite($myfile, $txt);}
 if (empty($_POST["sifulje"])) {$sifulje =0;}else {$sifulje=$_POST["sifulje"];$txt =", šifra: ".$sifulje;fwrite($myfile, $txt);}
 if (empty($_POST["cenaulje"])) {$cenaulje =0;}else {$cenaulje=$_POST["cenaulje"];$txt =", cena: ".$cenaulje." dinara po litru\n";
 fwrite($myfile, $txt);$txt ="\n";fwrite($myfile, $txt);}/*kraj za ulje*/
 
 /*Filteri ulja*/
  if (empty($_POST["filterulje"])) {$filterulje=0;}else{ $filterulje=1;$txt ="\n  Zamena filtera za ulje: \n";fwrite($myfile, $txt); }
 if (empty($_POST["markaFilterulja"])) {$markaFilterulja=0;}else {$markaFilterulja=$_POST["markaFilterulja"];$txt =" marke ".$markaFilterulja;fwrite($myfile, $txt);}
 if (empty($_POST["sifFilterulje"])) {$sifFilterulje=0;}else {$sifFilterulje=$_POST["sifFilterulje"];$txt =", šifra: ".$sifFilterulje;fwrite($myfile, $txt);}
 if (empty($_POST["cenaFilterulje"])) {$cenaFilterulje=0;}else {$cenaFilterulje=$_POST["cenaFilterulje"];$txt =", cena: ".$cenaFilterulje." dinara \n";
 fwrite($myfile, $txt); $txt ="\n";fwrite($myfile, $txt);}/*kraj za Filter ulja*/
 
  /*Filteri za gorivo*/
  if (empty($_POST["filtergorivo"])) {$filtergorivo=0;}else{ $filtergorivo=1;$txt ="\n  Zamena filtera za gorivo: \n";fwrite($myfile, $txt); }
 if (empty($_POST["markaFilterGorivo"])) {$markaFilterGorivo=0;}else {$markaFilterGorivo=$_POST["markaFilterGorivo"];$txt =" marke ".$markaFilterGorivo;fwrite($myfile, $txt);}
 if (empty($_POST["sifFiltergorivo"])) {$sifFiltergorivo=0;}else {$sifFiltergorivo=$_POST["sifFiltergorivo"];$txt =", šifra: ".$sifFiltergorivo;fwrite($myfile, $txt);}
 if (empty($_POST["cenaFiltergorivo"])) {$cenaFiltergorivo=0;}else {$cenaFiltergorivo=$_POST["cenaFiltergorivo"];$txt =", cena: ".$cenaFiltergorivo." dinara \n";
 fwrite($myfile, $txt);$txt ="\n";fwrite($myfile, $txt);}/*kraj za Filter za gorivo*/
 
 /*Filteri za vazduh*/
  if (empty($_POST["filtervazduh"])) {$filtervazduh=0;}else{ $filtervazduh=1;$txt ="\n  Zamena filtera za vazduh: \n";fwrite($myfile, $txt); }
 if (empty($_POST["markaFilterVazduh"])) {$markaFilterVazduh=0;}else {$markaFilterVazduh=$_POST["markaFilterVazduh"];$txt =" marke ".$markaFilterVazduh;fwrite($myfile, $txt);}
 if (empty($_POST["sifFiltervazduh"])) {$sifFiltervazduh=0;}else {$sifFiltervazduh=$_POST["sifFiltervazduh"];$txt =", šifra: ".$sifFiltervazduh;fwrite($myfile, $txt);}
 if (empty($_POST["cenaFilterVazduh"])) {$cenaFilterVazduh=0;}else {$cenaFilterVazduh=$_POST["cenaFilterVazduh"];$txt =", cena: ".$cenaFilterVazduh." dinara \n";
 fwrite($myfile, $txt); $txt ="\n";fwrite($myfile, $txt);}/*kraj za Filter za vazduh*/
 
 /*klima*/
 if (empty($_POST["klima"])) {$klima =0;}else {$klima=1;$txt ="\n  Servis klime: \n";fwrite($myfile, $txt); }
 if (empty($_POST["gasKlime"])) {$gasKlime=0;}else {$gasKlime=$_POST["gasKlime"];$txt ="Gas: ".$gasKlime." ";fwrite($myfile, $txt);}
 if (empty($_POST["kolGasKlime"])) {$kolGasKlime=0;}else {$kolGasKlime=$_POST["kolGasKlime"];$txt =$kolGasKlime." litara, ";fwrite($myfile, $txt);}
 if (empty($_POST["cenaGasKlima"])) {$cenaGasKlima=0;}else {$cenaGasKlima=$_POST["cenaGasKlima"];$txt =" cena: ".$cenaGasKlima." dinara\n";
 fwrite($myfile, $txt);$txt ="\n";fwrite($myfile, $txt);$txt ="\n";fwrite($myfile, $txt);}/*kraj za */
 
 /*kajis*/
 if (empty($_POST["kais"])) {$kais =0;}else{ $kais=1;$txt ="\n  Zamena kaiša: \n";fwrite($myfile, $txt); }
 if (empty($_POST["markazkaisa"])) {$markazkaisa =0;}else {$markazkaisa=$_POST["markazkaisa"];$txt =" marke ".$markazkaisa;fwrite($myfile, $txt);}
 if (empty($_POST["sifZupKais"])) {$sifZupKais =0;}else {$sifZupKais=$_POST["sifZupKais"];$txt =" šifra: ".$sifZupKais;fwrite($myfile, $txt);}
 if (empty($_POST["cenaZupKais"])) {$cenaZupKais =0;}else {$cenaZupKais=$_POST["cenaZupKais"];$txt =" cena: ".$cenaZupKais." dinara \n";
 fwrite($myfile, $txt);$txt ="\n";fwrite($myfile, $txt);}/*kraj za kais*/
 
 /*delovi*/
 if (empty($_POST["delovi"])) {$delovi=0;}else {$delovi=$_POST["delovi"];$txt ="\n Kupljeni deo:\n ".$delovi;fwrite($myfile, $txt);}
 if (empty($_POST["komada"])) {$komada=0;}else {$komada=$_POST["komada"];$txt =" komada ".$komada;fwrite($myfile, $txt);}
 if (empty($_POST["sifdela"])) {$sifdela=0;}else {$sifdela=$_POST["sifdela"];$txt =" šifra:".$sifdela;fwrite($myfile, $txt);}
 if (empty($_POST["cenadela"])) {$cenadela=0;}else {$cenadela=$_POST["cenadela"];$txt ="cena po komadu:".$cenadela."\n";fwrite($myfile, $txt);
 $txt ="\n"; fwrite($myfile, $txt);}
 
 /*tehnicki, osiguranje i atest*/
 if (empty($_POST["tehnicki"])) {$tehnicki =0;}else {$tehnicki=1;$txt ="\n Tehnički pregled\n";
 fwrite($myfile, $txt);$txt ="\n"; fwrite($myfile, $txt);}
 if (empty($_POST["osiguranje"])) {$osiguranje =0;}else {$osiguranje=1;$txt ="\n Osiguranje vozila\n";
 fwrite($myfile, $txt);$txt ="\n"; fwrite($myfile, $txt);}
  if (empty($_POST["atest"])) {$atest =0;}else {$atest=1;$txt ="\n Atest vozila\n";
 fwrite($myfile, $txt);$txt ="\n"; fwrite($myfile, $txt);} 
 /*kraj za tehnicki, osiguranje i atest*/
 
  /*Laki servis vozila*/
  if (empty($_POST["servis"])) {$servis=0;}else {$servis=$_POST["servis"];$txt ="\n Laki servis vozila:  ";
  fwrite($myfile, $txt);$txt ="\n";}
  if (empty($_POST["vrstaservis"])) {$vrstaservis=0;}else {$vrstaservis=$_POST["vrstaservis"];$txt =$vrstaservis."\n";
  fwrite($myfile, $txt);$txt ="\n";}
  /*kraj za Laki servis vozila*/
 
 /*delovi*/
  if (empty($_POST["delovi2"])) {$delovi2=0;}else {$delovi2=$_POST["delovi2"];$txt ="\n Kupljeni deo:\n ".$delovi2;
  fwrite($myfile, $txt);$txt ="\n";}
 if (empty($_POST["komada2"])) {$komada2=0;}else {$komada2=$_POST["komada2"];$txt =" komada ".$komada2; fwrite($myfile, $txt);}
 if (empty($_POST["sifdela2"])) {$sifdela2=0;}else {$sifdela2=$_POST["sifdela2"];$txt =" šifra:".$sifdela2;fwrite($myfile, $txt);}
 if (empty($_POST["cenadela2"])) {$cenadela2=0;}else {$cenadela2=$_POST["cenadela2"];$txt ="cena po komadu:".$cenadela2."\n";fwrite($myfile, $txt);
 $txt ="\n";fwrite($myfile, $txt);}/*kraj za delovi*/
 
 


echo $tablice.$ime.$srednjeslovo.$prezime.$km.'sasija'.$sasija.$gume.'gume'.$gume.'ulje'.$ulje;



$upit11="INSERT INTO `jednatabela11` ( `Ime`,`srednje`,`Prezime`,`telefon1`,`telefon2`, `adresa`,
`markaAuta`,`tablice`,`kilometraza`,`sasija`,`gume`,`komzg`,`modelzg`,`gumeletnje`,`komlg`,`modellg`,`sifrg`,`cenag`,
`ulje`,`kolulja`,`markaulja`,`sifulje`,`cenaulje`,`filterulje`,`markaFilterulja`,`sifFilterulje`,`cenaFilterulje`,
`filtergorivo`,`markaFilterGorivo`,`sifFiltergorivo`,`cenaFiltergorivo`,
`filtervazduh`,`markaFilterVazduh`,`sifFiltervazduh`,`cenaFilterVazduh`,
`klima`,`gasKlime`,`kolGasKlime`,`cenaGasKlima`,
`kais`,`markazkaisa`,`sifZupKais`,`cenaZupKais`,
`delovi`,`komada`,`sifdela`,`cenadela`,
`delovi2`,`komada2`,`sifdela2`,`cenadela2`
)VALUES 
( '".$ime."','".$srednjeslovo."','".$prezime."','".$telefon1."','".$telefon2."','".$adresa."',
'".$model."','".$tablice."','".$km."','".$sasija."',
'".$gume."','".$komzg."','".$modelzg."','".$gumeletnje."','".$komlg."','".$modellg."','".$sifrg."','".$cenag."',
'".$ulje."','".$kolulja."','".$markaulja."','".$sifulje."','".$cenaulje."',
'".$filterulje."','".$markaFilterulja."','".$sifFilterulje."','".$cenaFilterulje."' ,
'".$filtergorivo."' ,'".$markaFilterGorivo."','".$sifFiltergorivo."','".$cenaFiltergorivo."',
'".$filtervazduh."' ,'".$markaFilterVazduh."','".$sifFiltervazduh."','".$cenaFilterVazduh."',
'".$klima."' ,'".$gasKlime."','".$kolGasKlime."','".$cenaGasKlima."',
'".$kais."' ,'".$markazkaisa."','".$sifZupKais."','".$cenaZupKais."',
'".$delovi."','".$komada."' ,'".$sifdela."','".$cenadela."',
'".$delovi2."' ,'".$komada2."','".$sifdela2."','".$cenadela2."');";
$upit_pokretanje11=mysql_query($upit11);
if(!$upit_pokretanje11)
{echo 'Upit11 nije dobar'.'<br>';
}else{echo 'Upit11 je dobar'.'<br>';
}

$upit2="SELECT `idusluge`,`gume` FROM `jednatabela11` ";
$upit_pokretanje2=mysql_query($upit2);
if($upit_pokretanje2=mysql_query($upit2))echo 'upit2 je dobar<br>';else echo 'upit2 nije dobar<br>';
while ($upit_vrsta2=mysql_fetch_assoc($upit_pokretanje2)){
  echo'<tr>
    <td>'. $upit_vrsta2['idusluge'].'</td>';
	 echo '<td>gume'. $upit_vrsta2['gume'].'</td>;
    
</tr>';
 }
 echo'jel se de';
fclose($myfile);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stilivica.css">
<title>Ispis</title>
</head>
<body>

<div class="header">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp
 &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp 
<a href="http://triunf.rs/"target=_blank>
  <img   src="logo.png"width=200  ></a>
</div>

<div class="row">
<div class="col-3 col-m-3 menu">
<?php include 'meniIvica.php';?>
</div>

<div class="col-6 col-m-9 glavni">
<h1>Vođenje poslovanja</h1>
<h3>Ispis podataka o izvršenom unosu</h3>
<p>Kilometraža<?php $k=0;  if (empty($_POST["km"]))
	{$kilom =0;echo  ' nije uneta- uneti rucno';}else{ $kilom=$_POST["km"]; echo $kilom;}?></p>
<p>Na vozilu je radjeno:</p>
<?php
 if($gume==1)echo "Zamena zimskih guma<br>";
 if($gumeletnje==1)echo "Zamena letnjih guma<br>";
if($ulje==1)echo "Zamena ulja<br>";
if($filterulje==1)echo "Zamena feltera za ulje<br>";
if($filtergorivo==1)echo "Zamena feltera za gorivo<br>";
if($filtervazduh==1)echo "Zamena feltera za vazduh<br>";
if($klima==1)echo "Servis klime<br>";
if($kais==1)echo "Zamena kaiša<br>";
if($tehnicki==1)echo "Tehnički pregled<br>";
if($osiguranje==1)echo "Osiguranje vozila<br>";
if($atest==1)echo "Atest vozila<br>";
if($servis==1)echo $vrstaservis."<br>";
if($delovi==1)echo "Prodaja delova<br>";

?>
<br>

<form action="praviFajl.php" method="post">
Sledeći servis je nakon predjenih: <input type="text" name="sledeci"> km<br>
Ukoliko želite da dodate nešto, unesite text koji želite da se štampa: <input type="text" name="name"><br>
Ukoliko je u redu pritisnite DA:
<input type="submit" value="Da"><br>
 <?php die('Ukoliko želite da dodate nesto ispravite u unosi [ <a href="unos.php">Vrati se nazad!</a> ]');?>
</form>
</div>

<div class="col-3 col-m-12">
<div class="aside">
<h2>Obaveštenja:</h2>

<h3>Novine na sajtu</h3>
<h3></h3>

</div>
</div>

</div>

<div class="footer">
<p id="dole"></p>
<script src="scriptivica.js"></script>

</div>

</body>
</html>

