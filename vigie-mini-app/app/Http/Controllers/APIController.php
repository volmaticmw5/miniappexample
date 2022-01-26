<?php

namespace App\Http\Controllers;

use App\Models\DynamicText;
use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * Handle the GET request for generating text for a new dynamic button
     *
     * @return Response
     */ 
    public function GetNewTextForDynBtn()
    {
        $dynTxt = new DynamicText();
        $response = json_encode(['result' => 'ok', 'msg' => $dynTxt->getNewText()]);

        return response($response, 200)->header('Content-Type', 'application/json');
    }
}
