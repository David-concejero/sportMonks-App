<?php

	class api{
		private static $apiKey = "API KEY HERE!!!";
		private static $url_jugador_nombre = "https://soccer.sportmonks.com/api/v2.0/players/search/";
		private static $url_jugador_id = "https://soccer.sportmonks.com/api/v2.0/players/";
		private static $url_equipo_nombre = "https://soccer.sportmonks.com/api/v2.0/teams/search/";
		private static $url_equipo_id = "https://soccer.sportmonks.com/api/v2.0/teams/";
		private static $url_liga = "https://soccer.sportmonks.com/api/v2.0/leagues";
		private static $url_pais = "https://soccer.sportmonks.com/api/v2.0/countries/";

		public static function consultarJugadorNombre($jugador){
			$llamada = file_get_contents(self::$url_jugador_nombre.$jugador."?"."api_token=".self::$apiKey);
			if(!$llamada = $llamada = file_get_contents(self::$url_jugador_nombre.$jugador."?"."api_token=".self::$apiKey)){
				$error = error_get_last();
	      		return $error["message"];
			}
			else{
				$data = json_decode(file_get_contents(self::$url_jugador_nombre.$jugador."?"."api_token=".self::$apiKey), true );
				return $data;
			}
		}

		public static function consultarEquipoNombre($equipo){
			$llamada = file_get_contents(self::$url_equipo_nombre.$equipo."?"."api_token=".self::$apiKey."&include=squad");
			if(!$llamada = $llamada = file_get_contents(self::$url_equipo_nombre.$equipo."?"."api_token=".self::$apiKey."&include=squad")){
				$error = error_get_last();
	      		return $error["message"];
			}
			else{
				$data = json_decode(file_get_contents(self::$url_equipo_nombre.$equipo."?"."api_token=".self::$apiKey."&include=squad"), true );
				return $data;
			}
		}

		public static function consultarJugadorId($id_aleatorio){
			$data = json_decode(file_get_contents(self::$url_jugador_id.$id_aleatorio."?"."api_token=".self::$apiKey), true );
			return $data;
		}

		public static function consultarEquipoId($id_equipo){
			$data = json_decode(file_get_contents(self::$url_equipo_id.$id_equipo."?"."api_token=".self::$apiKey), true );
			return $data;
		}

		public static function consultarLiga(){
			$data = json_decode(file_get_contents(self::$url_liga."?"."api_token=".self::$apiKey), true );
			return $data;
		}

		public static function consultarPais($id_pais){
			$data = json_decode(file_get_contents(self::$url_pais.$id_pais."?"."api_token=".self::$apiKey), true );
			return $data;
		}

	}
?>
