<?php

namespace App\Http\Controllers;

use App\Models\Roupa;

use Illuminate\Http\Request;

class RoupasController extends Controller
{
    public function cadastroRoupas(Request $_request) 
    {
      // dd($_request );
      Roupa::create([
          'modelo'=>$_request-> modelo,
          'cor'=>$_request->cor,
          'tamanho'=>$_request->tamanho,
          'armazenamento'=>$_request->armazenamento]);
    }
}
