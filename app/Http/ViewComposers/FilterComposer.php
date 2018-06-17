<?php

namespace App\Http\ViewComposers;

use App\Certification;
use App\Duration;
use App\StartingDate;
use App\StudyMethod;
use App\Language;
use App\DiplomaType;
use App\University;
use Illuminate\View\View;

class FilterComposer
{

    protected $certification;
    protected $diplomaType;
    protected $language;
    protected $studyMethod;
    protected $university;
    protected $duration;
    protected $dates;

    /**
     * Create a new profile composer.
     *
     *
     * @return void
     */
    public function __construct(
        Certification $certification,
        DiplomaType $diplomaType,
        Language $language,
        StudyMethod $studyMethod,
        University $university,
        Duration $duration,
        StartingDate $date
    )
    {
        $this->certification = $certification->all(['id', 'name'])->pluck('id', 'name')->toArray();
        $this->diplomaType = $diplomaType->all(['id', 'name'])->pluck('id', 'name')->toArray();
        $this->language = $language->all(['id', 'name'])->pluck('id', 'name')->toArray();
        $this->studyMethod = $studyMethod->all(['id', 'name'])->pluck('id', 'name')->toArray();
        $this->university = $university->all(['id', 'name'])->pluck('id', 'name')->toArray();
        $this->duration = $duration->all(['id', 'name'])->pluck('id', 'name')->toArray();
        $this->dates = $date->all(['id', 'name'])->pluck('id', 'name')->toArray();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('certifications', $this->certification);
        $view->with('diplomaTypes', $this->diplomaType);
        $view->with('languages', $this->language);
        $view->with('studyMethods', $this->studyMethod);
        $view->with('univers', $this->university);
        $view->with('durations', $this->duration);
        $view->with('dates', $this->dates);
    }
}