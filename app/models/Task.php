<?php
namespace Ruben\models;
use Illuminate\Database\Eloquent\Model;

class Task extends Model{
    protected $table = 'task';
    protected $primaryKey = 'task_id';
    public $timestamps = false;
    protected $fillable = ['title', 'description', 'create_date'];
}
?>