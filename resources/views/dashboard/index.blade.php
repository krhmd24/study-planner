@extends('layouts.app')

@section('content')

<header class="header">

    <div class="logo">
        📚 Study Planner
    </div>

    <button class="btn-add-course">
        + Tambah Mata Kuliah
    </button>

</header>

<section class="semester">

    <h2>Semester 4</h2>

</section>

<section class="days">

    <div class="day-column">

        <h3>Senin</h3>

        <div class="course-card">

            <h4>IF204</h4>

            <p>Pemrograman Web</p>

            <ul>

                <li>CRUD Laravel</li>

                <li>Routing Laravel</li>

            </ul>

            <button>+ Tambah Tugas</button>

        </div>

    </div>

    <div class="day-column">

        <h3>Selasa</h3>

    </div>

    <div class="day-column">

        <h3>Rabu</h3>

    </div>

    <div class="day-column">

        <h3>Kamis</h3>

    </div>

    <div class="day-column">

        <h3>Jumat</h3>

    </div>

    <div class="day-column">

        <h3>Sabtu</h3>

    </div>

    <div class="day-column">

        <h3>Minggu</h3>

    </div>

</section>

@endsection