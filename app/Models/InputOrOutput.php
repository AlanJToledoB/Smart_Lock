<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputOrOutput extends Model
{
    use HasFactory;

    protected $table = 'input_or_output';

    protected $fillable = ['id_rfid', 'time'];

    public function rfid()
    {
        return $this->belongsTo(Rfid::class, 'id_rfid');
    }

    public function user()
    {
        return $this->rfid->belongsTo(User::class, 'id_user');
    }
}
