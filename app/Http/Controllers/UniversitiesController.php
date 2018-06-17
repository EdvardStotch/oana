<?php

namespace App\Http\Controllers;

use App\Course;
use App\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniversitiesController extends Controller
{
    public function show()
    {
     $courses = Course::with(['university', 'certification', 'diploma', 'language', 'method', 'image', 'start', 'duration'])
            ->get()->toJson();
        return view('welcome', compact('courses'));
    }


    public function filter(Request $request)
    {
        $courses = Course::with(['university', 'certification', 'diploma', 'language', 'method', 'image', 'start', 'duration']);
        $data = $request->data;
        foreach ($data as $args){
            if (!empty($args['value'])){
                if ($args['name'] != 'fee'){
                    $courses->whereIn($args['name'], $args['value']);
                } else {
                    if (isset($args['value']['min']) && isset($args['value']['min'])){
                        $courses->whereBetween($args['name'],[str_replace(' ', '',$args['value']['min']),str_replace(' ', '',$args['value']['max'])]);
                    }
                }
            }
        }
        return $courses->get()->toJson();
    }
}
