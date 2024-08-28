<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {

        $courses = Course::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('courses'));
    }

    public function create() {
        return view('cursos.create');
    }

    public function store(SaveCourseRequest $request) {

        // Ver Validaciones en SaveCourseRequest

        // $course = new Course();
        // $course->name = $request->name;
        // $course->description = $request->description;
        // $course->category = $request->category;
        // $course->save();
        $course = Course::create($request->all());

        return redirect()->route('courses.show', $course)->with('success', 'Haz creado el curso: '.$course->name);
    }

    public function show(Course $course) {
        return view('cursos.show', compact('course'));
    }

    public function edit(Course $course) {
        return view('cursos.edit', compact('course'));
    }

    public function update(SaveCourseRequest $request, Course $course) {
        $course->update($request->all());

        return redirect()->route('courses.show', $course)->with('success', 'Se actualizó correctamente el curso: '.$course->name);
    }

    public function destroy(Course $course) {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Se elimino correctamente el curso: '. $course->name);
    }
}
