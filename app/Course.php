<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $fillable = [];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships
	public function users()
	{
		return $this->belongsToMany(User::class)->withTimestamps();
	}

	public function lectures()
	{
		return $this->hasMany(Lecture::class);
	}

}
