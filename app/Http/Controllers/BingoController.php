<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BingoController extends Controller
{

	public function index($numeroCartelas) {
		
		$bingos = [];
		define('PASSO', 15);

		for($j = 0; $j < intval($numeroCartelas); $j++) {

			$bingo = ['B' => [], 'I' => [], 'N' => [], 'G' => [], 'O' => []];
			$anterior = 1;
			$contador = 1;

			foreach ($bingo as $letra => $numeros) {
				for ($i=1; $i <= 5; $i++) { 
					$numAleatorio = rand($anterior, PASSO * $contador);
					while (in_array($numAleatorio, $bingo[$letra])) {
						$numAleatorio = rand($anterior, PASSO * $contador);
					}
					$bingo[$letra][] = str_pad($numAleatorio, 2, "0", STR_PAD_LEFT);
				}
				$anterior = PASSO * $contador + 1;
				$contador++;
			}

			$bingo['N'][2] = '<i class="fa fa-glass" aria-hidden="true"></i>';
			$bingos[] = $bingo;

		}

		return view('bingo', compact('bingos'));

	}

}
