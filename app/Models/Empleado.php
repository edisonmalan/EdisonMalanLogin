<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $codigoempleado
 * @property $apellidos
 * @property $nombres
 * @property $usuarios_id
 * @property $fechaingreso
 * @property $estado
 * @property $created_at
 * @property $updated_at
 * @property $Usuariomodifica
 *
 * @property Empleadocarrerra[] $empleadocarrerras
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'usuarios_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigoempleado','apellidos','nombres','usuarios_id','fechaingreso','estado','Usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadocarrerras()
    {
        return $this->hasMany('App\Models\Empleadocarrerra', 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuarios_id');
    }
    

}
