<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    protected $table = 'numbers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'number_type',
        'number',
        'contact_id'
    ];

    public function contactModel()
    {
        return this->belongesTo(Contact::class);
    }

}
