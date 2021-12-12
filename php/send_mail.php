<?php
	if(isset($_POST¨['submit'])){
		$to = "officielwarano28@gmail.com";
		$from = "lionelmougoue6@gmail.com";
		$nom = 'Mougoue Happi Lionel';
		$statut = 'Etudiant en Dev. Web';
		$annee = 'Né le 09 septembre 1999';
		$origine = 'Originaire de l\'Ouest Cameroun';
		$sante = 'En couple - Santé R.A.S';
		$lieu = 'Résidant à PK12';
		$ville = 'Douala - Cameroun';
		$map = 'Map : 4.053276, 9.765047';
		$subject = "Cv send mail";
		$message = "CV de l'etudiant :" . $nom . \n . $statut . \n . $annee . \n . $origine . \n . $sante . \n . $lieu . \n . $ville . \n . $map . $_POST[$message];
		$headers = "FROM :" . $from;

		$mail($to, $subject, $message, $headers);

		echo "Mail Sent. Thank you";
	}
?>