<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
   [ 
        'id', 'nama_menu', 'jenis', 'harga', 
 'create_at, update_at',
    ];      protected function casts(): array 
    {         return [ 
            'id'   => 'bigint unsinged', 
            'nama_menu' => 'VARCHAR(100)',
            'jenis' => 'VARCHAR(100)',
            'harga' => 'VARCHAR(100)',
            'create_at, 'update_at' => 'VARCHAR(100)',
        ]; 
    } 
 
}
