<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
    protected $fillable = [
        'nombre', 'apellido', 'correo', 'password', 'rol', 'proveedor_oauth', 'proveedor_id', 'fecha_registro', 'estado'
    ];

    public function cursosCreados(): HasMany
    {
        return $this->hasMany(Curso::class, 'creado_por', 'id_usuario');
    }
    public function progreso(): HasMany
    {
        return $this->hasMany(Progreso::class, 'id_usuario', 'id_usuario');
    }
    public function resultados(): HasMany
    {
        return $this->hasMany(Resultado::class, 'id_usuario', 'id_usuario');
    }
    public function notificaciones(): HasMany
    {
        return $this->hasMany(Notificacion::class, 'id_usuario', 'id_usuario');
    }
}
