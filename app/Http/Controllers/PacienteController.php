<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Paciente $paciente)
    {
        $this->request = $request;
        $this->repository = $paciente;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os registros
        $pacientes = Paciente::latest()->paginate(5);
        return view('admin.pages.pacientes.index', [
            'pacientes' => $pacientes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //form de cadastro
        return view('admin.pages.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdatePacienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdatePacienteRequest $request)
    {
        //dd($request->all());

        $validated = $request->validated();

        /*
        $validatedData = $request->validate([
            'prontuario' => 'required|numeric|min:3|max:255',
            'nome' => 'required|min:3|max:255',
        ]);
        */

        //Gravar os dados do form
        $data = $request->only('nome','prontuario');
        Paciente::create($data);
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar detalhes de um paciente em especifico

        if (!$paciente = Paciente::find($id))

        return redirect()->back();

        return view('admin.pages.pacientes.show', [
            'paciente' => $paciente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Form de edição

        if (!$paciente = Paciente::find($id))

        return redirect()->back();

        return view('admin.pages.pacientes.edit', [
            'paciente' => $paciente
        ]);

        //return view('admin.pages.pacientes.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Atualizando dados
        if (!$paciente = $this->repository->find($id))
            return redirect()->back();
        $paciente->update($request->all());
            return redirect()->route('pacientes.show', $paciente->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deletando o registro

        $paciente = $this->repository->where('id', $id)->first();

        if (!$paciente)
            return redirect()->back();
        $paciente->delete();
            return redirect()->route('pacientes.index');
    }

    /**
     * FORM DE PESQUISA NA LISTA DOS PACIENTES
     */
    public function search(Request $request)
    {
        $filtros = $request->except('_token');

        $pacientes = $this->repository->search($request->filtro);
        
        return view('admin.pages.pacientes.index', [
            'pacientes' => $pacientes,
            'filtros' => $filtros,
        ]);
    }
}
