<?php

namespace App\Services;

use App\Models\Student;

class HomeService
{
    public function getIndex($request = null)
    {
        $page = request('page');  //check page
        $rows = request('rows'); // check rows
        $filter = $this->filterCheck(request('filter'));
        $products = Student::query()->orderBy('id', $filter);
        if ($this->allCheck($page,  $rows))
        {
            // Checkend are rows and page
            $products = $products->paginate($rows, ['*'], 'page name', $page);
        }
        else{
            $products = $products->get();
        }
        return $products;
    }

    //check filter
    public function filterCheck($filter)
    {
        if ($filter == 'desc' || $filter == 'asc') {
            return $filter;
        } else {
            $filter = 'asc';
            return $filter;
        }
    }
    //checkend all parametrs
    public function allCheck($page, $rows)
    {
        if (!isset($page)  && !isset($rows)) {
            return false;
        } else {
            return true;
        }
    }
}
