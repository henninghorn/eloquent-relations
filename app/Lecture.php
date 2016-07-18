<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Lecture extends Model {

	protected $fillable = [];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	// Relationships
	public function course()
	{
		return $this->belongsTo(App\Course::class);
	}

}
