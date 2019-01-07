@extends('layouts.back')

@section('sidebar')
<ul class="nav">
    <li class="active">
        <a href="{{ route('dashboard')}}">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li>
        <a href="{{ url('/settings/1/edit')}}">
            <i class="pe-7s-settings"></i>
            <p>Instellingen</p>
        </a>
    </li>
</ul>
@endsection

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                test
            </div>
        </div>
    </div>
@endsection