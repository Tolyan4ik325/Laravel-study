<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $guarded = [];

    public function project() {
    	return $this->belongsTo(Project::class);
    }

    public function addTask($description) 
    {
    	$this->tasks()->create(compact('description'));
    	
		// return Task::create([
		// 	'project_id' => $this->id,
		// 	'description' =>$description
		// ]);		
    }
}
