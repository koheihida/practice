<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $Skills = Skill::all();
        return view('skills.index', compact('skills'));
    }
}
