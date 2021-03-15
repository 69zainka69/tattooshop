<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sclad extends Model
{
    protected $fillable = ['title'];

    public function products() {
        // return $this->hasManyThrough(
        //     Product::class, 
        //     Sclad1::class,
        //     'id_sklad',
        //     'id_product'
        //     // 'id_sklad', // Foreign key on the environments table...
        //     // 'environment_id', // Foreign key on the deployments table...
        //     // 'id', // Local key on the projects table...
        //     // 'id' // Local key on the environments table...
        //     /* 

        //     1. Sclad
        //         id - integer
        //         name - string

        //     environments
        //         id - integer
        //         project_id - integer
        //         name - string

        //     deployments
        //         id - integer
        //         environment_id - integer
        //         commit_hash - string
            
        //     */
        // );
        return $this->hasMany(Product::class, 'sclad_id');
    }
}
