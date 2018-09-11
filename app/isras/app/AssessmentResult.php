<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Assessment;
use App\Company;
use DB;
use Illuminate\Support\Facades\Auth;

class AssessmentResult extends Model
{
    protected $table = 'assessment_results';

    protected $assessment_id;
    protected $assessment_company;
    protected $assessment_score;
    protected $assessment_date;
    protected $Assessments;
    public $paginated;

    // relationship
    // has
    public function assessment() { return $this->hasOne('App\Assessment'); }

    public function LoadAssessmentResult()
    {
        $arr = [];

        //Define how many items we want to be visible in each page
        $per_page = 10;

        $userId = User::all()->where('entity_id', Auth::id())->first()->id;
        $company = Company::find($userId)->first()->name;
        $Assessments = DB::table('assessments')->distinct()->select('assessment_result_id')->where('user_id', $userId )->paginate($per_page);

        foreach ($Assessments as $Assessment)
        {
            $ass = DB::table('assessment_results')->where('id', $Assessment->assessment_result_id)->first();

            $result = new AssessmentResult ();
            $result->setAssessmentId($ass->id);
            $result->setAssessmentCompany($company);
            $result->setAssessmentScore($ass->result);
            $result->setAssessmentDate($ass->created_at);

            array_push($arr, $result);
        }

        //Pagination
        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($Assessments);

        //Slice the collection to get the items to display in current page
        $currentPageResults = $collection->slice(($currentPage-1) * $per_page, $per_page)->all();

        //Create our paginator and add it to the data array
        $this->paginated = new LengthAwarePaginator($currentPageResults, count($collection), $per_page);

        //Set base url for pagination links to follow e.g custom/url?page=6
        $this->paginated->setPath(LengthAwarePaginator::resolveCurrentPath());

        return $arr;
    }

    //Setter
    public function setAssessmentId($id)
    {
        $this->assessment_id = $id;
    }

    public function setAssessmentCompany($company)
    {
        $this->assessment_company = $company;
    }

    public function setAssessmentScore($score)
    {
        $this->assessment_score = $score;
    }

    public function setAssessmentDate($date)
    {
        $this->assessment_date = $date;
    }

    public function setAssessments($Assessments)
    {
        $this->Assessments = $Assessments;
    }

    //Getter
    public function getAssessmentId()
    {
        return $this->assessment_id;
    }

    public function getAssessmentCompany()
    {
        return $this->assessment_company;
    }

    public function getAssessmentScore()
    {
        return $this->assessment_score ;
    }

    public function getAssessmentDate()
    {
        return $this->assessment_date;
    }

    public function getAssessments()
    {
        return $this->Assessments;
    }

    public function getPaginated()
    {
        return $this->paginated;
    }

}
