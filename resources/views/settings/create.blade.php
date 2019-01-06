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
        <a href="{{ route('settings.create')}}">
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Instellingen startpagina</h4>
                        </div>
                        <div class="content">
                            <form method="POST" action="{{ route('settings.store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Site titel</label>
                                            <input type="text" class="form-control" name="site_title" id="site_title" placeholder="Site titel">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Sub titel</label>
                                            <input type="text" class="form-control" name="sub_site_title" id="sub_site_title" placeholder="Sub titel">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Tekst zwarte button</label>
                                            <input type="text" class="form-control" name="accent_button_text" id="accent_button_text" placeholder="Button tekst">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Blok titel</label>
                                            <input type="text" class="form-control" name="block_site_title" id="block_site_title" placeholder="Blok titel">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Blok tekst</label>
                                            <textarea rows="5" class="form-control" name="block_site_text" id="block_site_text" placeholder="Blok tekst"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact blok titel</label>
                                            <input type="text" class="form-control" name="contact_site_title" id="contact_site_title" placeholder="Contact blok titel">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact blok sub titel</label>
                                            <input type="text" class="form-control" name="sub_contact_site_title" id="sub_contact_site_title" placeholder="Contact blok sub titel">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tekst witte button</label>
                                            <input type="text" class="form-control" name="dark_button_text" id="dark_button_text" placeholder="Tekst witte button">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Update settings</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection