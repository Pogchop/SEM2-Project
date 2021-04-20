@extends('front.layout.master')

@section('title', 'search_exam')

@section('styles')
    <link rel="stylesheet" href="front/OnlineEdu/css/search_exam.css">
@endsection

@section('body')
    <div><h1>Type in your exam id</h1></div>
    <form action="search_exam.blade.php">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Exam ID...">
                    <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </form>
@endsection
