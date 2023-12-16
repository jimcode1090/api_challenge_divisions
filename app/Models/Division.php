<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Division extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;

    protected $table = 'divisions';

    protected $fillable = [
        'nombre',
        'parent_id',
        'nivel',
        'colaboradores',
        'embajador'
    ];

    public function getDepthName(): string
    {
        return 'level';
    }

    public function getLocalKeyName(): string
    {
        return 'id';
    }

    public function getParentKeyName(): string
    {
        return 'parent_id';
    }

}
