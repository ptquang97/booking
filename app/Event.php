<?php
/**
 * Created by PhpStorm.
 * User: QuangPT
 * Date: 4/11/2019
 * Time: 7:59 AM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * @var string table name
     */
    protected $table = 'events';
    /**
     * @var array collumn of table
     */
    public $fillable = ['summary', 'email', 'group_id', 'room_id', 'timeStart', 'timeEnd', 'event_date'];
}
