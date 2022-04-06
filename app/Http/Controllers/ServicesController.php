<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('services.index_products')->with('service',  $service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.add_product')->with('success', 'clear images increases chances of having more customers');
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
            'name' => 'required|string|max:50',
            'type' => 'required|string|in:Hairdressing,Outside Catering,Others',
            'price' => 'required|string',
            'availability' => 'required|string|in:Available,Flexible,On-request',
            'description' => 'required|string|max:500',
            'cover_image' => 'required|image|max:4000',
        ]);

        if ($request->hasFile('cover_image')) {
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('cover_image')->storeAs('public/images', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $service = new Service();
        $service->name = $request->input('name');
        $service->service = $request->input('type');
        $service->price = $request->input('price');
        $service->availability = $request->input('availability');
        $service->serial = Str::random(8);
        $service->cover_image = $fileNameToStore;
        $service->description = $request->input('description');
        $service->save();

        return redirect('services')->with('success', 'service added successfully');
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
        $service = Service::find($id);

        return view('services.edit_product')->with('service', $service);
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
            'name' => 'required|string|max:50',
            'type' => 'required|string|in:Hairdressing,Outside Catering,Others',
            'price' => 'required|string',
            'availability' => 'required|string|in:Available,Flexible,On-request',
            'description' => 'required|string|max:500',
            'cover_image' => 'image|max:4000',
        ]);

        if ($request->hasFile('cover_image')) {
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('cover_image')->storeAs('public/images', $fileNameToStore);
        }

        $service = Service::find($id);
        $service->name = $request->input('name');
        $service->service = $request->input('type');
        $service->price = $request->input('price');
        $service->availability = $request->input('availability');
        if ($request->hasFile('cover_image'))
        {
            $service->cover_image = $fileNameToStore;
        }
        $service->description = $request->input('description');
        $service->save();

        return redirect('services')->with('success', 'service updated successfully');
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
