<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
        
        // Define manualmente o nome da table
        protected $table = 'projects';
        // Define as colunas da tablela  e cria uma proteção
        protected $fillable = ['name', 'description', 'id_owner', 'id_status', 'active'];

        public function status()
        {
            return $this->hasOne(Status::class, 'id', 'id_status');
        }

}