<?php

namespace App\Http\Controllers;

use App\Farmer;
use App\Vendor;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function farmer()
    {
        return view('pages.farmer');
    }
    public function vendr()
    {
        return view('pages.vendor');
    }
    public function vendorStore(Request $request)
    {
        $vendor = Vendor::create([


            'name' => $request['name'],


            'location' => $request['location'],



            'phone' => $request['phone']
        ]);
        if($vendor){
        return back()->with('success', 'Application Received. We will get back to you shortly');
            }else
                {
                    return back()->with('error', 'Could not send your application. Try again later');

                }


    }
    public function farmerStore(Request $request)
    {
       $farmer = Farmer::create([


            'name' => $request['name'],
            'location' => $request['location'],
            'phone' => $request['phone'],
            'land_size' => $request['land'],
            'products' => $request['products'],
        ]);
        if($farmer){
            return back()->with('success', 'Application Received. We will get back to you shortly');
        }else
        {
            return back()->with('error', 'Could not send your application. Try again later');

        }

    }

}
