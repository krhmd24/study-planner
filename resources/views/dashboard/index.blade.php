@extends('layouts.app')

@section('content')

<div class="dashboard">

    @include('components.sidebar')

    <main class="main-content">

        @include('components.topbar')

        @if(session('success'))

<div class="alert-success">

    {{ session('success') }}

</div>

@endif

        @include('components.statistics')

        @include('components.course-form')

        @include('components.schedule')

    </main>

</div>

@endsection