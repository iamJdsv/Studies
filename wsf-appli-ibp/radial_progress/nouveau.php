<?php include 'header.php'; ?>
<body>
	<header>
    <h1>Voiture</h1>
    <a href="projets.php">
      <div class="buttonBack">
      <!-- <div></div>
      <div></div> -->
    </div>
  </a>
  </header>
	<div id="nouveau">
		<div class="form nom">
			<input type="text" placeholder="Nom du projet" maxlength="15">
		</div>

		<div class="form cout">
			<input type="text" placeholder="Coût total du projet">
		</div>

		<div class="choix date">
			<img src="images/Symbole_calendrier.png" alt="Date de réalisation butoire">
			<div>
			<label>Echéance :</label>
			<input type="date">
			</div>
			<div>
			<label>Débit mensuel estimé à :</label>
			</div>
		</div>

		<div class="choix montant">
			<img id="sac" src="images/Symbole_Sac_argent.png" alt="Montant régulier ocroyé">
			<div>
			<input type="text">
			<label>€ tous les mois</label>
			</div>
			<div>
			<label>Fin du projet estimée estimé à :</label>
			</div>
		</div>

		<div id="continuer">
			<div id="suivant"></div>
			<p>CONTINUER</p>
		</div>
	</div>

	<!-- DEUXIEME PAGE -->

	<div id="options">
		<p>Choisir le compte associé :</p>
		<select name="compte" size="1">
 			<option>Banque Populaire - Compte courant
			<option>Banque Populaire - Livret A
			<option>Banque Populaire - PEL
			<option>LCL - Compte courant
			<option>LCL - Livret A
		</select>
		<div class="parametres check">
		<p>Prélèvement auto.<img src="images/Symbole_Check.png" alt="Bouton activé/désactivé"></p>
		<p>Activer les rappels<img src="images/Symbole_Check.png" alt="Bouton activé/désactivé"></p>
		<p>Ordre de priorité
			<select name="priorite" size="1">
 				<option>1
				<option>2
				<option>3
				<option>4
			</select>
		</p>
		</div>
		<img id="valider" src="images/Symbole_Valider.png" alt="Valider">
	</div>

</body>
