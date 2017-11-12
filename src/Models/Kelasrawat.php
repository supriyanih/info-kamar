<?php namespace Supriyanih\InfoKamar\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The InfoKamarModel class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class Kelasrawat extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'kelas_rawat_inap';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ['kode_kelas','nama_kelas'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];


     public function kelas()
    {
      return  $this->hasMany('Supriyanih\InfoKamar\Models\Ruangrawat');
    }
}
