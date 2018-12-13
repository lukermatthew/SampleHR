<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Subscription;
use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subscriptions = Subscription::all();
        return view('admin.subscription.index',compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $clients = Client::all();
        $packages = Package::all();
        return view('admin.subscription.create',compact('clients','packages'));

       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'client' => 'required',
            'package' => 'required',
            'expiry_date' => 'required'
        ]);

        $subscription = new Subscription();
        
        $subscription->client_id = $request->client;
        $subscription->package_id = $request->package;
        $subscription->expiry_date = $request->expiry_date;
        $subscription->save();
        return redirect()->route('admin.subscription.index')->with('successMsg','Added Successfully');
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
        //
       
        $subscription = Subscription::find($id);
        $clients = Client::all();
        $packages = Package::all();
        return view('admin.subscription.edit',compact('subscription','clients','packages'));

    
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
        //
        $this->validate($request, [
            'client' => 'required',
            'package' => 'required',
            'expiry_date' => 'required'
        ]);
        $subscription = Subscription::find($id);
       
        $subscription->client_id = $request->client;
        $subscription->package_id = $request->package;
        $subscription->expiry_date = $request->expiry_date;
        $subscription->save();
        return redirect()->route('admin.subscription.index')->with('successMsg','Updated Successfully');
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
        $subscription = Subscription::find($id);
        $subscription->delete();
        return redirect()->back()->with('successMsg','Deleted Successfully');

        

    }
}
