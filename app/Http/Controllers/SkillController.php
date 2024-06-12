<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return Skill::all();
    }

    public function store(Request $request)
    {
        return Skill::create($request->all());
    }

    public function show($id)
    {
        return Skill::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->update($request->all());
        return $skill;
    }

    public function destroy($id)
    {
        Skill::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
