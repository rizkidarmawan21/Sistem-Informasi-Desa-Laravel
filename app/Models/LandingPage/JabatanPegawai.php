<?php

namespace App\Models\LandingPage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JabatanPegawai extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
}
