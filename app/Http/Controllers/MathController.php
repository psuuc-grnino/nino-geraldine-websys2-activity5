<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function multiply($num1, $num2)
    {
        //ito ang code kung saan ay inaalam kung ang input numbers ay katumbas ng 'zero'
        if ($num1 == 0 || $num2 == 0) {
            return response()->json(['error' => 'Cannot be divided by zero'], 400);
        }

        //ito naman ang code para sa pag-multiply ng dalawang numero
        $result = $num1 * $num2;

        //ito ang code kung saan nagdedeklara ng kulay para sa numero na 'odd, 'even' at ang resulta
        $backgroundColor = ($result % 2 == 0) ? 'green' : 'lightgreen';
        $textColor = ($num1 % 2 == 0) ? 'orange' : 'blue';

        return view('result', compact('num1', 'num2', 'result', 'backgroundColor', 'textColor'));
    }
}
