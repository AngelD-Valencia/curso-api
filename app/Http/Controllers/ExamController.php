<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExamSaveRequest;
use App\Http\Requests\ExamUpdateRequest;
use App\Http\Resources\ExamResource;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Exam::where('state', 'ACTIVE')->get();
        return ExamResource::collection($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamSaveRequest $request)
    {
        //
        $exam = Exam::create($request->all());
        return $exam;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
        return new ExamResource($exam);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(ExamUpdateRequest $request, Exam $exam)
    {
        //
        $exam->update($request->all());

        return new ExamResource($exam);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
        if($exam) $exam->update(['state' => 'DELETE']);

        return response()->noContent();
    }
}
