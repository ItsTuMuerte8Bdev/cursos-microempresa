<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Leccion extends Model
{
    protected $table = 'lecciones';
    protected $primaryKey = 'id_leccion';
    public $timestamps = false;
    protected $fillable = [
        'id_modulo', 'titulo', 'contenido', 'tipo', 'recurso_url'
    ];

    public function modulo(): BelongsTo
    {
        return $this->belongsTo(Modulo::class, 'id_modulo', 'id_modulo');
    }
    public function progreso(): HasMany
    {
        return $this->hasMany(Progreso::class, 'id_leccion', 'id_leccion');
    }
}
