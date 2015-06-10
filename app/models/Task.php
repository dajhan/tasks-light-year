<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Task extends Eloquent {


	protected $table = 'tasks';

    //tributos
    protected $fillable = ["name", "due_date","done"];

    //timestamps
    public $timestamps = true;

}
