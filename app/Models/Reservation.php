<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
            'lastname',
            'email',
            'tel_number',
            'birth_date',
            'post',
            'town',
            'codepostal',
            'res_date',
            'menu_id',

    ] ;
    protected $dates = [
        'res_date'
    ] ;

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
