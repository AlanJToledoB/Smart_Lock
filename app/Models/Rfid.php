<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfid extends Model
{
    use HasFactory;

    protected $table = 'rfid';

    protected $fillable = ['code', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function inputOutputs()
    {
        return $this->hasMany(InputOrOutput::class, 'id_rfid');
    }
}
