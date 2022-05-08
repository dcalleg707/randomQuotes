<?php

namespace App\Http\Controllers;

class PokeneaController extends Controller
{

    public static $pokeneas = array(
        [
            'id' => 1,
            'name' => 'Armadillo ELN',
            'height' => '30 cm',
            'skill' => 'balacera',
            'image' => 'https://storage.googleapis.com/pokeneas-images/armadillo_eln.jpg',
            'phrase' => 'El armadillo ELN es un pokemon de tipo roca, se dice que puede ser disparado como una bala hacia los oponentes.',
        ],
        [
            'id' => 2,
            'name' => 'Gallina malandra',
            'height' => '60 cm',
            'skill' => 'Explosión celular',
            'image' => 'https://storage.googleapis.com/pokeneas-images/gallina%20malandra.jpg',
            'phrase' => 'La gallina malandra es un Pokémon de tipo volador, caracterizada por escuchar caifanes e ir a rock al parque.',
        ],
        [
            'id' => 3,
            'name' => 'Ganso Wot',
            'height' => '65 cm',
            'skill' => 'Espada de luz',
            'image' => 'https://storage.googleapis.com/pokeneas-images/ganso_halo.png',
            'phrase' => 'El ganso Wot es un Pokémon de tipo lucha, se lanza hacia sus enemigos sin importar si son muchos mas grandes que el con un grito suicida.',
        ],
        [
            'id' => 4,
            'name' => 'Pelicanodonte',
            'height' => '100 cm',
            'skill' => 'mordisco',
            'image' => 'https://storage.googleapis.com/pokeneas-images/pelican.png',
            'phrase' => 'El pelicanodonte es un Pokémon de tipo normal, se dice que puede lanzar un mordisco hacia los oponentes e incluso comerselos enteros.',
        ],
        [
            'id' => 5,
            'name' => 'Pitbull Machete',
            'height' => '50 cm',
            'skill' => 'machetazo',
            'image' => 'https://storage.googleapis.com/pokeneas-images/pitbul_machete.jpg',
            'phrase' => 'El pitbull Machete es un Pokémon de tipo acero, el machete que tiene en su boca se dice es indestructible y capaz de cortar la roca misma.',
        ],
        [
            'id' => 6,
            'name' => 'Rana Bombazo',
            'height' => '10 cm',
            'skill' => 'bombazo',
            'image' => 'https://storage.googleapis.com/pokeneas-images/rana.png',
            'phrase' => 'La rana Bombazo es un Pokémon de tipo agua, hipnotiza a sus oponentes flotando lentamente hasta desatar un bombazo de agua aturdidor.',
        ],
        [
            'id' => 7,
            'name' => 'Cementor ',
            'height' => '50 cm',
            'skill' => 'confusión',
            'image' => 'https://storage.googleapis.com/pokeneas-images/cemento.jpg',
            'phrase' => 'El cementor es un Pokémon de tipo roca, se camufla con las bolsas de cemento en las construcciones y juega bromas ligeras a los obreros como soltar vigas pesadas desde pisos altos y corroer los simientos de los edificios en construcción, se dice que se vió uno durante la construcción de Space.',
        ]
    );

    public function generalData()
    {
        $totalQuotes = (count(PokeneaController::$pokeneas));
        $randomNumber = (rand(0, ($totalQuotes - 1)));
        $randomQuote = PokeneaController::$pokeneas[$randomNumber];

        $data = [
            'id' => $randomQuote['id'],
            'name' => $randomQuote['name'],
            'height' => $randomQuote['height'],
            'skill' => $randomQuote['skill'],
        ];

        return response()->json(['pokenea' => $data, 'server_ip' => gethostbyname(gethostname())]);
    }

    public function imageAndPhrase()
    {
        $totalQuotes = (count(PokeneaController::$pokeneas));
        $randomNumber = (rand(0, ($totalQuotes - 1)));
        $randomQuote = PokeneaController::$pokeneas[$randomNumber];

        $data = [
            'image' => $randomQuote['image'],
            'phrase' => $randomQuote['phrase'],
        ];

        $viewData = [
            'pokenea' => $data,
            'server_ip' => gethostbyname(gethostname()),
        ];

        return view('pokenea', ['viewData' => $viewData]);
    }
}
