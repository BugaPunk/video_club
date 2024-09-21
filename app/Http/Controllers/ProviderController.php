<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreProviderRequest;
use App\Http\Requests\UpdateProviderRequest;
use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;
use App\Models\Provider;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::get();
        return view('admin.Provider.index', compact('providers'));
    }
    
    public function create()
    {
        return view('admin.Provider.create');
    }
    
    public function store(StoreRequest $request)
    {
        Provider::create($request->all());
        return redirect()->route('providers.index');
    }

    public function show(Provider $Provider)
    {
        return view('admin.Provider.show', compact('Provider'));
    }
    
    public function edit(Provider $Provider)
    {
        return view('admin.Provider.show', compact('Provider'));
    }

    public function update(UpdateRequest $request, Provider $Provider)
    {
        $Provider->update($request->all());
        return redirect()->route('providers.index');
    }
    
    public function destroy(Provider $Provider)
    {
        $Provider->delete();
        return redirect()->route('providers.index');
    }
}
