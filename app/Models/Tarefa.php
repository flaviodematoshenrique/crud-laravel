<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    //protected $table = 'tarefas';
    //protected $primaryKey = 'id';
    //public $incrementing = false;
    //protected $keyType = 'string';

    // created_at, update_at
    public $timestamps = false;

    protected $fillable = ['titulo'];

    //const CREATED_AT = 'registrado_created'
    //const UPDATE_AT = 'date_update';
}
