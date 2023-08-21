<?php

namespace App\Http\Controllers;

use App\Models\Vistoria;
use Illuminate\Http\Request;

class VistoriaController extends Controller
{
    public function index()
    {
        $vistorias = Vistoria::latest()->paginate(5);
    
        return view('vistorias.index',compact('vistorias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vistorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'cnh' => 'required',
            'selfie' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placa' => 'required',
            'chassi' => 'required',
            'renavam' => 'required',
            'uf' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'km' => 'required|integer',
            'nivel_combustivel' => 'required|numeric',
            'foto_placa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_dianteira' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_traseira' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_hodometro' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_banco' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
    
        if ($selfieImage = $request->file('selfie')) {
            $selfiePath = 'image/';
            $selfieImageName = date('YmdHis') . "." . $selfieImage->getClientOriginalExtension();
            $selfieImage->move($selfiePath, $selfieImageName);
            $input['selfie'] = $selfieImageName;
        }
    
        if ($placaImage = $request->file('foto_placa')) {
            $placaPath = 'image/';
            $placaImageName = date('YmdHis') . "." . $placaImage->getClientOriginalExtension();
            $placaImage->move($placaPath, $placaImageName);
            $input['foto_placa'] = $placaImageName;
        }
    
        if ($dianteiraImage = $request->file('foto_dianteira')) {
            $dianteiraPath = 'image/';
            $dianteiraImageName = date('YmdHis') . "." . $dianteiraImage->getClientOriginalExtension();
            $dianteiraImage->move($dianteiraPath, $dianteiraImageName);
            $input['foto_dianteira'] = $dianteiraImageName;
        }
    
        if ($traseiraImage = $request->file('foto_traseira')) {
            $traseiraPath = 'image/';
            $traseiraImageName = date('YmdHis') . "." . $traseiraImage->getClientOriginalExtension();
            $traseiraImage->move($traseiraPath, $traseiraImageName);
            $input['foto_traseira'] = $traseiraImageName;
        }
    
        if ($hodometroImage = $request->file('foto_hodometro')) {
            $hodometroPath = 'image/';
            $hodometroImageName = date('YmdHis') . "." . $hodometroImage->getClientOriginalExtension();
            $hodometroImage->move($hodometroPath, $hodometroImageName);
            $input['foto_hodometro'] = $hodometroImageName;
        }
    
        if ($bancoImage = $request->file('foto_banco')) {
            $bancoPath = 'image/';
            $bancoImageName = date('YmdHis') . "." . $bancoImage->getClientOriginalExtension();
            $bancoImage->move($bancoPath, $bancoImageName);
            $input['foto_banco'] = $bancoImageName;
        }
    
        Vistoria::create($input);
    
        return redirect()->route('vistorias.index')
            ->with('success', 'Vistoria created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vistoria $vistoria)
    {
        return view('vistorias.show',compact('vistoria'));
    }


}
