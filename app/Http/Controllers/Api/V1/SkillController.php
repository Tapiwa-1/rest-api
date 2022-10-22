<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Resources\V1\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function index()
    {
        return new SkillCollection(Skill::paginate(1));
    }
    public function store(StoreRequest $request)
    {
        Skill::create($request->validated());
        return response()->json("Skill created");
    }
    public function show(Skill $skill)
    {

        return new SkillResource($skill);
    }
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json("Skill deleted");
    }
}
