<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookDaycare extends Model
{
    protected $fillable = [
        'name','phone','address','t_time','g_time','date','p_name','payable','paid','payment_status'
    ];
    protected $attributes = [
        'payment_status' => 'unpaid'
    ];
    public function package(){
        return $this->belongsTo('App\Package','p_name');
     }

}
