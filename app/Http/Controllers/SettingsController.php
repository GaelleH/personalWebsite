<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use DB;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('settings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'site_title' => 'required',
            'sub_site_title' => 'required',
            'accent_button_text' => 'required',
            'block_site_title' => 'required',
            'block_site_text' => 'required',
            'contact_site_title' => 'required',
            'sub_contact_site_title' => 'required',
            'dark_button_text' => 'required',
        ]);

        //Create setting
        $setting = new Setting;
        $setting->site_title = $request->input('site_title');
        $setting->sub_site_title = $request->input('sub_site_title');
        $setting->accent_button_text = $request->input('accent_button_text');
        $setting->block_site_title = $request->input('block_site_title');
        $setting->block_site_text = $request->input('block_site_text');
        $setting->contact_site_title = $request->input('contact_site_title');
        $setting->sub_contact_site_title = $request->input('sub_contact_site_title');
        $setting->dark_button_text = $request->input('dark_button_text');
        $setting->save();

        return redirect('/settings/create')->with('succes', 'Settings edited');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = 1;
        $setting = Setting::find($id);

        return view('settings.edit')->with('setting', $setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'site_title' => 'required',
            'sub_site_title' => 'required',
            'accent_button_text' => 'required',
            'block_site_title' => 'required',
            'block_site_text' => 'required',
            'contact_site_title' => 'required',
            'sub_contact_site_title' => 'required',
            'dark_button_text' => 'required',
        ]);

        //Create setting
        $setting = Setting::find($id);
        $setting->site_title = $request->input('site_title');
        $setting->sub_site_title = $request->input('sub_site_title');
        $setting->accent_button_text = $request->input('accent_button_text');
        $setting->block_site_title = $request->input('block_site_title');
        $setting->block_site_text = $request->input('block_site_text');
        $setting->contact_site_title = $request->input('contact_site_title');
        $setting->sub_contact_site_title = $request->input('sub_contact_site_title');
        $setting->dark_button_text = $request->input('dark_button_text');
        
        $setting->save();

        return redirect('/settings/1/edit')->with('succes', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
