<?php 

namespace Source\Api;

class Cotation
{
	private $url;

	public function __construct()
	{
		$this->url = "https://api.hgbrasil.com/finance";
	}

	/**	 
	 * @param type $coin 	 
	 */
	public function search($coin)
	{
		$ch = curl_init($this->url);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$dados = json_decode(curl_exec($ch));

		$search = $dados->results->currencies->$coin;

		return $search;
	}
	
}
