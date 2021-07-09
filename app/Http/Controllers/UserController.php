<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, User $user)
    {
        $this->request = $request;
        $this->repository = $user;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os registros
        $users = User::latest()->paginate(5);
        return view('admin.pages.users.index', [
            'users' => $users,
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
        return view('admin.pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $data = $request->only('nome','email','perfil');
        User::create($data);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar detalhes de um usuário em especifico

        if (!$user = User::find($id))

        return redirect()->back();

        return view('admin.pages.users.show', [
            'user' => $user
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

        if (!$user = User::find($id))

        return redirect()->back();

        return view('admin.pages.users.edit', [
            'user' => $user
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
        if (!$user = $this->repository->find($id))
            return redirect()->back();
        $user->update($request->all());
            return redirect()->route('users.index');
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

        $user = $this->repository->where('id', $id)->first();

        if (!$user)
            return redirect()->back();
                $user->delete();
            return redirect()->route('users.index');
    }

    /**
     * FORM DE PESQUISA NA LISTA DOS USUÁRIOS
     */
    public function search(Request $request)
    {
        $filtros = $request->except('_token');

        $users = $this->repository->search($request->filtro);
        return view('admin.pages.users.index', [
            'users' => $users,
            'filtros' => $filtros,
        ]);
    }
}
