<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $Services = Service::all();
        return view('backoffice.service.indexService',compact('Services'));
    }

    public function create()
    {
        return view('backoffice.service.createService');
    }

    public function store(Request $request)
    {
        //champs obligatoire
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "icon" => ["required"],
        ]);

        //mettre dans la db
        $service = new Service();
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->route('service.index');
    }

    //delete
    public function destroy(Service $id)
    {
        $id->delete();
        return redirect()->route('service.index');
    }

    //edit
    public function edit(Service $id)
    {
        $service = $id;
        return view('backoffice.service.editService', compact('service'));
    }

    public function update(Service $id, Request $request)
    {
        //champs obligatoire
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "icon" => ["required"],
        ]);

        //mettre dans la db
        $service = $id;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->save();
        return redirect()->route('service.index');
    }

    //show
    public function show(Service $id)
    {
        $service = $id;
        return view('backoffice.service.showService', compact('service'));
    }

}
