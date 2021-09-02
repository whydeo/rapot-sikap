<?php

namespace App;
use view;
use app\siswa;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['absen','nama','kelas','jk'];
    public $timestamps = false;
}