<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //colunas com permissão de preencher pelo form
    //PASSA SOMENTE OS CAMPOS LISTADOS
    protected $fillable = ['nome', 'prontuario'];
      
    /** PASSA TODOS OS CAMPOS, EXCETO
     */ 
    //protected $guarded = [''];

    /**
     * FILTRO PACIENTES
     */
    public function search($filtro = null)
    {
      $results = $this->where(function ($query) use($filtro) {
        if ($filtro) {
          $query->where('nome', 'LIKE', "%{$filtro}%");
        }
      })->latest()->paginate(5);

      return $results;
    }
}
