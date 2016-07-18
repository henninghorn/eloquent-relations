<?php

use Illuminate\Database\Seeder;
use App\Course;
use App\Lecture;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Course::class, 10)->create()->each(function ($course) {
        	$course->users()->attach(factory(User::class, 25)->create());
        	$course->lectures()->saveMany(factory(Lecture::class, 10)->make());
        });
    }
}
