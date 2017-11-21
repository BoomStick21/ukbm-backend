<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table = 'm_nasabah_perorangan_umum';
	const CREATED_AT = 'd_entry';
	const UPDATED_AT = 'd_update';
}
