<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKontak extends Model
{
    protected $table="kontak";
    //default primary key adadalah id
    protected $primarykey="id_kontak";
    //untuk mematikan pengotomasian isert kolom update at
    public $timestamps=false;
}
