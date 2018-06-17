<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
    * certification method
    * @params
    * @return void
    */
    public function certification()
    {
        return $this->belongsTo(Certification::class, 'certificate_id');
    }

    public function image()
    {
        return $this->hasOne(CourseImage::class, 'course_id');
    }
    
    public function diploma()
    {
        return $this->belongsTo(DiplomaType::class, 'diploma_type_id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function method()
    {
        return $this->belongsTo(StudyMethod::class, 'study_method_id');
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    /**
    *  method
    * @params
    * @return void
    */
    public function duration()
    {
        return $this->belongsTo(Duration::class);
    }

    public function start()
    {
        return $this->belongsTo(StartingDate::class);
    }
}
