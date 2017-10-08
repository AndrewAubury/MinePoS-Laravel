<?php

namespace App\Http\Controllers;

use \App\Server;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminServer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(){
        return view('admin.pages.servers');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        $newServer = new Server;
        $newServer->name = request("name");
        $newServer->api_key = "resetkey";
        $newServer->save();
        return redirect()->action('AdminServer@index')->with('good', 'Server "'.request("name").'" has been created!');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Server $server)
    {
        if(request("name") != null){
            $server->name = request("name");
        }
        if(request("resetkey") != null){
            $server->api_key = "resetkey";
        }
        $server->enabled = (request("enabled") != null);
        $server->save();
        return redirect()->action('AdminServer@index')->with('good', 'Server "'.request("name").'" has been updated!');
    

    }
    public function delete(\App\Server $server)
    {
        $server->delete();
        return redirect()->action('AdminServer@index')->with('good', 'Server '.$server->name.' deleted.');
    }
}
