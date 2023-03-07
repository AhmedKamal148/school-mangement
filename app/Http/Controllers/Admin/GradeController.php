<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\Grade\gradeTrait;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    use  gradeTrait;

    public function index()
    {
        $grades = $this->getAllGrades();
        
        return view('admin.pages.grade.index', compact('grades'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
