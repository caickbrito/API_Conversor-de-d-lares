<?php 

namespace Source\App;

use Source\Core\Controller;
use Source\Api\Cotation;



class Web extends Controller
{
	public function __construct($router)
	{
		parent::__construct($router);

	}


	public function home(array $data): void
	{
		$cotation = new Cotation();		
		date_default_timezone_set ("America/Sao_Paulo");	
		$dolar = $cotation->search("USD")->sell;	
		
		echo $this->view->render("home", [ 
			"title" => "Página incial | ",  
			"dolar" => $dolar, 
			"real" => number_format($dolar, 2, ',', '.'),
			"hoje" => date("d/m/Y H:i"),
		]);	
	}

	public function request($data)
	{
		$data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
		$dolar = floatval(str_replace(',', '.', $data['dolar']));
		
		$cotation = new Cotation();
		$resultado = $dolar * $cotation->search("USD")->sell;
		$resultado = number_format($resultado, 2, ',', '.');

		echo json_encode($resultado);
	}
}
