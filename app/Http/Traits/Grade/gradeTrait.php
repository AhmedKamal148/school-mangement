<?php

namespace App\Http\Traits\Grade;

use App\Models\Grade;

trait gradeTrait
{
    private function getAllGrades()
    {
        return Grade::get(['id', 'name', 'notes']);
    }
}
