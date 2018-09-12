<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class LibraryContent extends Model
{
    protected $table = 'library_contents';
    protected $paginated;
    protected $library_title;
    protected $library_author;
    protected $library_publication;
    protected $library_src;

    // relationship
    // has
    public function admin_library_content() { return $this->hasMany('App\AdminLibraryContent'); }
    // lookup
    public function lookup_publication() { return $this->hasOne('App\LookupPublication', 'id'); }
    public function lookup_author() { return $this->hasOne('App\LookupAuthor', 'id'); }

    public function LoadLibraryContent()
    {
        $arr_content = [];

        //Define how many items we want to be visible in each page
        $per_page = 10;

        $libraries = LibraryContent::paginate($per_page);//LibraryContent::all();

        foreach($libraries as $library) 
        {
            $libraryModel = new LibraryContent();
            $libraryModel->SetSrc($library->src);
            $libraryModel->SetTitle($library->title);
            $libraryModel->SetAuthor($library->lookup_author->name);
            $libraryModel->SetPublication($library->lookup_publication->name);

            array_push($arr_content, $libraryModel);
        }

        //Pagination
        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($libraries);

        //Slice the collection to get the items to display in current page
        $currentPageResults = $collection->slice(($currentPage-1) * $per_page, $per_page)->all();

        //Create our paginator and add it to the data array
        $this->paginated = new LengthAwarePaginator($currentPageResults, count($collection), $per_page);

        //Set base url for pagination links to follow e.g custom/url?page=6
        $this->paginated->setPath(LengthAwarePaginator::resolveCurrentPath());

        return $arr_content;
    }

    //Setter
    public function SetTitle($title)
    {
        $this->library_title = $title;
    }

    public function SetAuthor($author)
    {
        $this->library_author = $author;
    }

    public function SetPublication($publication)
    {
        $this->library_publication = $publication;
    }

    public function SetSrc($src)
    {
        $this->library_src = $src;
    }

    public function setPaginated($paginated)
    {
        $this->paginated = $paginated;
    }

    //Getter
    public function GetTitle()
    {   
        return $this->library_title;
    }

    public function GetAuthor()
    {
        return $this->library_author;
    }

    public function GetPublication()
    {
        return $this->library_publication;
    }

    public function GetSrc()
    {
        return $this->library_src;
    }

    public function getPaginated()
    {
        return $this->paginated;
    }

}
