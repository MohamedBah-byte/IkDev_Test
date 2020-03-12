<html>
	<head>
	    <meta chaset="UTF-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="nav.css"/>
	</head>
	<body>
	<div id="myvolumes" style="display: none;">
   <?php
	include "DBVolume.php";
	?>
</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	
        <nav class="navbar navbar-expand-lg navbar-custom  navbar-dark bg-dark">
            
            <ul class="navbar-nav">
       			<li class="nav-item "><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Cuisine</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Bureau</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Carton</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Chambre</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Entree</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Garage</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Jardin</a></li>
                
            </ul>
			<span class="ml-auto navbar-text">IkDev Test</span>
        </nav>
        <table width="100%" border="2" class="table table-striped">
		<tr>
		    <td width="33%"><center><img src="images/tabouret.jpg" height="30%"/><br>
			                  Tabouret   
			                <br><button onclick="decFunction(document.getElementById('tabouret').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="tabouret">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('tabouret').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
		    <td width="33%"><center><img src="images/table.jpg" height="30%"/><br>
			                  Table de petit déjeuner   
			                <br><button onclick="decFunction(document.getElementById('tablepdj').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="tablepdj">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('tablepdj').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/banc.jpg" height="20%"/><br>
			                  Siège de banc
			                <br><button onclick="decFunction(document.getElementById('banc').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="banc">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('banc').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
		</tr>
		<tr>
		   
			<td width="33%"><center><img src="images/poubelle.jpg" height="30%"/><br>
			                  Poubelle à pédale  
			                <br><button onclick="decFunction(document.getElementById('poubelle').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="poubelle">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('poubelle').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			
			<td width="33%"><center><img src="images/chaise.jpg" height="30%"/><br>
			                  Chaise haute 
			                <br><button onclick="decFunction(document.getElementById('chaise').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="chaise">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('chaise').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/appareil.jpg" height="35%"/><br>
			                 Mélangeur, petit appareil à main
			                <br><button onclick="decFunction(document.getElementById('appareil').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="appareil">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('appareil').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
		</tr>
		<tr>
		    
			<td width="33%"><center><img src="images/cafetiere.jpg" height="30%"/><br>
			                 Bouilloire / Cafetière
			                <br><button onclick="decFunction(document.getElementById('cafetiere').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="cafetiere">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('cafetiere').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/micro-onde.jpg" height="30%"/><br>
			                 Four micro-onde
			                <br><button onclick="decFunction(document.getElementById('four').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="four">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('four').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/fer.jpg" height="40%"/><br>
			                 Fer / planche à repasser
			                <br><button onclick="decFunction(document.getElementById('fer').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="fer">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('fer').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
		</tr>
		<tr>
		  
			<td width="33%"><center><img src="images/aspirateur.jpg" height="45%"/><br>
			                 Aspirateur
			                <br><button onclick="decFunction(document.getElementById('aspirateur').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="aspirateur">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('aspirateur').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/machine.jpg" height="45%"/><br>
			                 Machine à laver
			                <br><button onclick="decFunction(document.getElementById('machine').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="machine">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('machine').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/seche.jpg" height="30%"/><br>
			                 Sèche-linge
			                <br><button onclick="decFunction(document.getElementById('seche').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="seche">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('seche').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
		</tr>
		<tr>
		   
			<td width="33%"><center><img src="images/lave.jpg" height="30%"/><br>
			                 Lave-vaisselle
			                <br><button onclick="decFunction(document.getElementById('lave').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="lave">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('lave').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/congelo.jpg" height="45%"/><br>
			                 Congélateur
			                <br><button onclick="decFunction(document.getElementById('congelo').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="congelo">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('congelo').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/frigo.jpg" height="45%"/><br>
			                 Réfrigérateur petit ou moyen
			                <br><button onclick="decFunction(document.getElementById('frigo').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="frigo">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('frigo').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
		</tr>
		<tr>
		   
			<td width="33%"><center><img src="images/frigro.jpg" height="45%"/><br>
			                 Réfrigérateur gros
			                <br><button onclick="decFunction(document.getElementById('frigro').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="frigro">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('frigro').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/cuisiniere.jpg" height="30%"/><br>
			                 Cuisiniere
			                <br><button onclick="decFunction(document.getElementById('cuis').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="cuis">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('cuis').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"><center><img src="images/cartonl.jpg" height="45%"/><br>
			                 Grande carton approx taille (cm) 55x35x30
			                <br><button onclick="decFunction(document.getElementById('cartonl').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="cartonl">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('cartonl').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
		</tr>
		<tr>
		   
			<td width="33%"><center><img src="images/cartonm.jpg" height="45%"/><br>
			                 Carton moyen environ taille (cm) 35x25x30
			                <br><button onclick="decFunction(document.getElementById('cartonm').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-down"><</span>
                                </button> &nbsp;&nbsp; 
								<a id="cartonm">0</a> &nbsp;&nbsp; 
			               <button onclick="incFunction(document.getElementById('cartonm').id)" type="button" class="btn btn-default" aria-label="Left Align">
                                     <span class="glyphicon glyphicon-menu-up">></span>
                                </button></center></td>
			<td width="33%"></td>
			<td width="33%"></td>
		</tr>
		</table>
		<div id="bottomBar" class="div-absolute bg-dark">
		
        <button onclick="coockieFunction('cook')" type="button" class="btn btn-default btn-cal" ><span class="glyphicon glyphicon-menu-down">
		Calculer volume</span></Button>&nbsp;&nbsp; 
		<a id="cook" >0.00 m3</a>&nbsp;&nbsp; 
		
		<button  type="button" class="btn btn-default" ><span class="glyphicon glyphicon-menu-down">
		Valider</span></Button>
		
		<button onclick="zeroFunction()" type="button" class="btn btn-default btn-zero" ><span class="glyphicon glyphicon-menu-down">
		Remise a zero</span></Button>
		
        </div>
		<script>
	var  decFunction = function(id){
		
		
		var num = document.getElementById(id).innerHTML;
		if(parseInt(num, 10) > 0){
		var dec = parseInt(num, 10) - 1;
		document.getElementById(id).innerHTML = dec;
		}
		
	}
	var  incFunction = function(id){
		
		var num = document.getElementById(id).innerHTML;
		if(parseInt(num, 10) < 100){
		var inc = parseInt(num, 10) + 1;
		document.getElementById(id).innerHTML = inc;
		}
	}
    var zeroFunction = function(){
		 document.getElementById("tabouret").innerHTML =0;
		 document.getElementById("tablepdj").innerHTML=0;
		document.getElementById("banc").innerHTML=0;
		document.getElementById("poubelle").innerHTML=0;
		 document.getElementById("chaise").innerHTML=0;
		document.getElementById("appareil").innerHTML=0;
		 document.getElementById("cafetiere").innerHTML=0;
		document.getElementById("four").innerHTML=0;
		 document.getElementById("fer").innerHTML=0;
		document.getElementById("aspirateur").innerHTML=0;
		document.getElementById("machine").innerHTML=0;
		 document.getElementById("seche").innerHTML=0;
		document.getElementById("lave").innerHTML=0;
		 document.getElementById("congelo").innerHTML=0;
		document.getElementById("frigo").innerHTML=0;
		 document.getElementById("frigro").innerHTML=0;
		document.getElementById("cuis").innerHTML=0;
		document.getElementById("cartonl").innerHTML=0;
	   document.getElementById("cartonm").innerHTML=0;
	   document.getElementById("cook").innerHTML = "0.00 m3";
	}
	
	var coockieFunction = function(id){
		var numTabouret = document.getElementById("tabouret").innerHTML;
		var numTablepdj = document.getElementById("tablepdj").innerHTML;
		var numBanc = document.getElementById("banc").innerHTML;
		var numPoubelle = document.getElementById("poubelle").innerHTML;
		var numChaise = document.getElementById("chaise").innerHTML;
		var numApp = document.getElementById("appareil").innerHTML;
		var numCafe = document.getElementById("cafetiere").innerHTML;
		var numFour = document.getElementById("four").innerHTML;
		var numFer = document.getElementById("fer").innerHTML;
		var numAsp = document.getElementById("aspirateur").innerHTML;
		var numMach = document.getElementById("machine").innerHTML;
		var numSeche = document.getElementById("seche").innerHTML;
		var numLave = document.getElementById("lave").innerHTML;
		var numCongelo = document.getElementById("congelo").innerHTML;
		var numFrigo = document.getElementById("frigo").innerHTML;
		var numFrigRo = document.getElementById("frigro").innerHTML;
		var numCuis = document.getElementById("cuis").innerHTML;
		var numCarL = document.getElementById("cartonl").innerHTML;
		var numCarM = document.getElementById("cartonm").innerHTML;
		
		var volumeTabouret = document.getElementById("a1").innerHTML;
		var volumeTablepdj = document.getElementById("a2").innerHTML;
		var volumeBanc = document.getElementById("a3").innerHTML;
		var volumePoubelle = document.getElementById("a4").innerHTML;
		var volumeChaise = document.getElementById("a5").innerHTML;
		var volumeApp = document.getElementById("a6").innerHTML;
		var volumeCafe = document.getElementById("a7").innerHTML;
		var volumeFour = document.getElementById("a8").innerHTML;
		var volumeFer = document.getElementById("a9").innerHTML;
		var volumeAsp = document.getElementById("a10").innerHTML;
		var volumeMach = document.getElementById("a11").innerHTML;
		var volumeSeche = document.getElementById("a12").innerHTML;
		var volumeLave = document.getElementById("a13").innerHTML;
		var volumeCongelo = document.getElementById("a14").innerHTML;
		var volumeFrigo = document.getElementById("a15").innerHTML;
		var volumeFrigRo = document.getElementById("a16").innerHTML;
		var volumeCuis = document.getElementById("a17").innerHTML;
		var volumeCarL = document.getElementById("a18").innerHTML;
		var volumeCarM = document.getElementById("a19").innerHTML;
		
		var volume = parseFloat(numTabouret) * parseFloat(volumeTabouret) + parseFloat(numTablepdj) * parseFloat(volumeTablepdj) + parseFloat(numBanc) * parseFloat(volumeBanc) +
		             parseFloat(numPoubelle) * parseFloat(volumePoubelle) + parseFloat(numChaise) * parseFloat(volumeChaise) + parseFloat(numApp) * parseFloat(volumeApp) +
					 parseFloat(numCafe) * parseFloat(volumeCafe) + parseFloat(numFour) * parseFloat(volumeFour) + parseFloat(numFer) * parseFloat(volumeFer) +
					 parseFloat(numAsp) * parseFloat(volumeAsp) + parseFloat(numMach) * parseFloat(volumeMach) + parseFloat(numSeche) * parseFloat(volumeSeche) +
					 parseFloat(numLave) * parseFloat(volumeLave) + parseFloat(numCongelo) * parseFloat(volumeCongelo) +parseFloat(numFrigo) * parseFloat(volumeFrigo)+
					 parseFloat(numFrigRo) * parseFloat(volumeFrigRo) + parseFloat(numCuis) * parseFloat(volumeCuis) + parseFloat(numCarL) * parseFloat(volumeCarL) +
					 parseFloat(numCarM) * parseFloat(volumeCarM);
		document.getElementById(id).innerHTML =volume.toFixed(2)+" m3";
	}
	</script>
	</body>
</html>
