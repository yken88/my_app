<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Recipe extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'recipe_name',
        'procedure',        
        'materials',        
        'time_required',        
        'cocking_day',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
