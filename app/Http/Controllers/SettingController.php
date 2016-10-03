<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\SettingRequest;
use App\Setting;
use Request;
use Image;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $settings = DB::table('settings')->first();
        if (Request::wantsJson()){
            return $settings;
        }else{
            return view('settings.index',compact('settings'));
        }
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
    public function store(SettingRequest $request)
    {
        $setting = new Setting();
        $setting->name = $request->name;
        $setting->email = $request->email;
        $setting->localizacao = $request->localizacao;
        $setting->telefone = $request->telefone;
        $setting->telemovel = $request->telemovel;
        $setting->nif = $request->nif;
        $setting->cod_postal = $request->cod_postal;

        if ($request->hasFile('logo_url')){
            $image = $request->file('logo_url');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/' . $filename);

            Image::make($image->getRealPath())->resize(300, 150)->save($path);

            $setting->logo_url = $filename;
            
        }

        $setting->save();

        session()->flash('flash_message','Setting was stored with success');

        if (Request::wantsJson()){
            return $setting;
        }else{
            return redirect('settings');
        }
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
    public function edit(Setting $setting)
    {
        return view('settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        //$setting->update($request->all());
        $setting->name = $request->name;
        $setting->email = $request->email;
        $setting->localizacao = $request->localizacao;
        $setting->telefone = $request->telefone;
        $setting->telemovel = $request->telemovel;
        $setting->nif = $request->nif;
        $setting->cod_postal = $request->cod_postal;
        $setting->logo_url = $request->logo;

        if ($request->hasFile('logo_url')){

            $image = $request->file('logo_url');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/' . $filename);

            if($request->logo){
              if(file_exists('uploads/'.$request->logo)){
                unlink('uploads/'.$request->logo);
              }
            }

            Image::make($image->getRealPath())->save($path);

            $setting->logo_url = $filename;
        }
         $setting->save();
        session()->flash('flash_message','Setting was update with success');

        if (Request::wantsJson()){
            return $setting;
        }else{
            return redirect('settings');
        }
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
