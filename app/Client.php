<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function Client(){
        return Client::all();
    }
}
