<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceList extends Model{

    use HasFactory;

    public function invoice(){
        return $this->hasOne(Invoice::class);
    }

}
 