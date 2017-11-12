<?php namespace Supriyanih\InfoKamar\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The InfoKamarModel class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class Tempattidur extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'tempat_tidur';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ['ruang_id','kode_bed','status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];


    public function ranjang()
     {
        return  $this->belongsTo('Supriyanih\InfoKamar\Models\Ruangrawat','ruang_id');
     }
}
