@extends('layouts.back')

@section('sidebar')
<ul class="nav">
    <li>
        <a href="{{ route('dashboard')}}">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="active">
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
                @include('layouts.messages')
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Instellingen startpagina</h4>
                        </div>
                        <div class="content">
                            <form  
                                action="{{ route('settings.update', $setting) }}"
                                method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT')}}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Site titel</label>
                                            <input type="text" class="form-control" name="site_title" id="site_title" value="{{$setting->site_title}}">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Sub titel</label>
                                            <input type="text" class="form-control" name="sub_site_title" id="sub_site_title" value="{{$setting->sub_site_title}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Tekst zwarte button</label>
                                            <input type="text" class="form-control" name="accent_button_text" id="accent_button_text" value="{{$setting->accent_button_text}}">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Blok titel</label>
                                            <input type="text" class="form-control" name="block_site_title" id="block_site_title" value="{{$setting->block_site_title}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Blok tekst</label>
                                            <textarea rows="5" class="form-control" name="block_site_text" id="block_site_text">{{$setting->block_site_text}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact blok titel</label>
                                            <input type="text" class="form-control" name="contact_site_title" id="contact_site_title" value="{{$setting->contact_site_title}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact blok sub titel</label>
                                            <input type="text" class="form-control" name="sub_contact_site_title" id="sub_contact_site_title" value="{{$setting->sub_contact_site_title}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tekst witte button</label>
                                            <input type="text" class="form-control" name="dark_button_text" id="dark_button_text" value="{{$setting->dark_button_text}}">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-info btn-fill pull-right">Update settings</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection