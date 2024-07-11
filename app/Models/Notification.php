<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public function toggleComplete(){
        $this->completed =!$this->completed;
        $this->save();
    }
}
