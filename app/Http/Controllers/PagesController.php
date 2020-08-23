<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
        }
    public function about(){
        return view('pages.about');
        }
    public function courses(){
        return view('pages.courses');
        }
    public function courses_kids(){
        return view('pages.courses_kids');
        }
    public function courses_teens(){
        return view('pages.courses_teens');
        }
    public function courses_adults(){
        return view('pages.courses_adults');
        }
    public function courses_business(){
        return view('pages.courses_business');
        }
    public function courses_exams(){
        return view('pages.courses_exams');
        }
    public function gallery(){
        return view('pages.gallery');
        }
}
