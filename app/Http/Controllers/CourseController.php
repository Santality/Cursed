<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view("index", [
            "courses"=>$courses
        ]);
    }

    public function create(Request $request){
        $request->validate([
            "title" => "required|max:200",
            "cost" => "required|numeric",
            "duration" => "required|numeric",
            "description" => "required",
            "image" => "required",

        ], [
            "title.required" => "Поле название курса не заполнено!",
            "title.max" => "Название курса должно быть не более 200 символов!",
            "cost.required" => "Поле стоимость курса не заполнено!",
            "cost.numeric" => "Введите числовое значение!",
            "duration.numeric" => "Введите числовое значение!",
            "duration.required" => "Поле длительность курса не заполнено!",
            "description.required" => "Поле описание курса не заполнено!",
            "image.required" => "Выберите фото!",
        ]);

        $course_info = $request->all();

        $file = $request->file("image");

        $file_name = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
        
        Storage::putFileAs("public/image",$file,$file_name);

        Course::create([
            "title"=>$course_info['title'],
            "category_id"=>$course_info['category'],
            "cost"=>$course_info['cost'],
            "duration"=>$course_info['duration'],
            "description"=>$course_info['description'],
            "image"=>$file_name
        ]);
        return redirect("/admin");
    }
}
