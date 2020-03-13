<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name', 'slug', 'description'];

// RELACIONES

    // un rol puede tener muchos permisos
    public function permissions(){
        //Este rol tiene muchos permisos (uno a muchos)
        return $this->hasMany('App\Permission');
    }

    // un rol puede tener muchos usuarios
    public function users(){
        //este rol pertenece a muchos usuarios (muchos a muchos)
        return $this->belongsToMany('App\User')->withTimestamps();
    }

// ALMACENAMIENTO
    public function store($request){

        $slug = Str::slug($request->name, '-');

        return self::create($request->all() + ['slug' => $slug ]);
    }

// VALIDACION

// RECUPERACION DE INFORMACÓN

// OTRAS OPERACIONES

}

