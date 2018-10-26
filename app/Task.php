<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description', 'completed'];

    public function project()
    {
    	return $this->belongs(Projects::class);
    }

    public function complete($completed = true)
    {
    	$this->update(compact('completed'));
    }

    public function incomplete()
    {
    	$this->complete(false);
    }
}
