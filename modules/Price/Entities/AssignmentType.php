<?php namespace Modules\Price\Entities;
   
use Illuminate\Database\Eloquent\Model;

class AssignmentType extends Model {

    protected $fillable = ["name","status"];
    protected $table = "assignmentTypes";

}