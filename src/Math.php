<?php
//namespace par defaut
namespace App;
class Math{
	//fonction qui retourne le double d’un nombre
	public static function double($nombre){
		return $nombre * 2;
	}
	//fonction qui retourne le ttc d’un prix
	public static function ttc($prix){
		return $prix * 1.2;
	}
	//fonction 
	public static function verif($valeur1,$valeur2){
		if($valeur1<$valeur2){
			return true;
		}
		else{
		return false;
		}
	}
}
?>