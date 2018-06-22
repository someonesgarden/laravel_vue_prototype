@extends('layouts.base')
@section('title', 'APP')

@section('content')
    <router-view></router-view>
@endsection

@section('footer')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
