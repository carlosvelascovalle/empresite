<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'cif',
        'denominacion',
        'direccion',
        'localidad',
        'provincia',
        'telefono',
        'pagina_web',
        'email',
        'antiguedad',
        'actividad_cnae',
        'forma_juridica',
        'fecha_constitucion',
        'objeto_social',
    ];

    public function scopeSearch($query, $search)
    {
        return $query->where('denominacion', 'like', '%' . $search . '%')
            ->orWhere('cif', 'like', '%' . $search . '%')
            ->orWhere('localidad', 'like', '%' . $search . '%')
            ->orWhere('provincia', 'like', '%' . $search . '%')
            ->orWhere('actividad_cnae', 'like', '%' . $search . '%')
            ->orWhere('forma_juridica', 'like', '%' . $search . '%')
            ->orWhere('objeto_social', 'like', '%' . $search . '%');
    }

    public function scopeSearchByCif($query, $search)
    {
        return $query->where('cif', 'like', '%' . $search . '%');
    }

    public function getUrlAttribute(): string
    {
        return route('empresas.show', ['slug' => $this->denominacion]);
    }
    public function getSlugAttribute(): string
    {
        return $this->denominacion;
    }
}
