<?php
/*Classe de personne du CV*/

/**
 * 
 */
abstract class Personne
{
	
	public function __construct(public $enom, public $estatut, public $eannee, public $eorigine, public $esante, public $elieu, public $eville, public $elocalisation, public $enumero, public $ereseau, public $eadresse, public $ereseauSocial)
	{
	
	}
}


?>