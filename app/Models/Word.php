<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = 'words';
    public $timestamps = false;
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'erayga',
        'slug',
        'nooca',
        'qeexitaannada',
        'la_micne_ah',
        'image_path',
    ];

    public function sluggable() :array {
        return [
            'slug'=>[
                'source'=>'erayga'
            ]
            ];
    }
}
