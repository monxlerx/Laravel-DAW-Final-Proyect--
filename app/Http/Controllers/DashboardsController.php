<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Exam;
use App\Post;
use App\RegisteredCourse;
use App\Course;
use App\Booking_Stays_Abroad;
use App\Exam_Reservation;
use App\Feedback;
use App\Stays_Abroad;


class DashboardsController extends Controller
{
    public function admin()
    {
        $id = Auth::user()->id;
        $contactInfos = User::orderBy('name')->get();
        $totalUsers = User::where('type', '=', 'student')->get();
        $latestUsers = User::where('type', '=', 'student')->orderBy('id', 'desc')->take(8)->get();
        $totalTeachers = User::where('type', '=', 'teacher')->get();
        $totalPosts = Post::all();
        $totalFeedbacks = Feedback::all();
        $course = Course::orderBy('price', 'desc')->first();
        $courseMin = Course::orderBy('price')->first();
        $examMax = Exam::orderBy('price', 'desc')->first();
        $examMin = Exam::orderBy('price')->first();
        $stayAbroadMax = Stays_Abroad::orderBy('price_week', 'desc')->first();
        $stayAbroadMin = Stays_Abroad::orderBy('price_week')->first();
        $totalRegisteredCourses = RegisteredCourse::all();
        $totalExamReservation = Exam_Reservation::all();
        $totalStaysAbroad = Booking_Stays_Abroad::all();
        $locations = Stays_Abroad::all();
        $feedbacks = Feedback::orderBy('id', 'desc')->take(3)->get();


        return view('dashboards.admin', compact('id', 'latestUsers', 'totalUsers', 'totalTeachers',
                                        'totalPosts', 'totalFeedbacks', 'course',
                                        'contactInfos', 'totalRegisteredCourses', 'totalExamReservation',
                                        'totalStaysAbroad', 'locations', 'courseMin', 'examMax', 'examMin',
                                        'stayAbroadMax', 'stayAbroadMin', 'feedbacks'));
    }

    public function student()
    {
        $id = Auth::user()->id;
        $posts = Post::where('receiver', '=', 'Student')->orderBy('created_at', 'desc')->take(5)->get();
        $courses = RegisteredCourse::where('user_id', '=', $id)->get();
        $sAbroad = Booking_Stays_Abroad::where('user_id', '=', $id)->get();
        $users = User::where('type', '=', 'student')->orderBy('id', 'desc')->take(8)->get();
        $examReservations = Exam_Reservation::where('user_id', '=', $id)->get();
        $latestFeedback = Feedback::where('user_id', '=', $id)->orderBy('created_at', 'desc')->take(1)->get();

        return view('dashboards.student', compact('id', 'posts', 'courses', 'sAbroad', 'users', 'examReservations', 'latestFeedback'));
    }

    public function teacher()
    {
        
        $id = Auth::user()->id;
        $posts = Post::where('receiver', '=', 'Teacher')->orderBy('created_at', 'desc')->take(5)->get();
        $soldCourses = RegisteredCourse::all();
        $availableCourses = Course::all();
        $soldExams = Exam_Reservation::all();
        $typeExams = Exam::all();
        $users = User::where('type', '=', 'student')->orderBy('id', 'desc')->take(8)->get();

        return view('dashboards.teacher', compact('id', 'posts', 'users', 'soldCourses', 'availableCourses', 'soldExams', 'typeExams'));
    }
}
