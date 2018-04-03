<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;

class PricingController extends Controller
{
  public function Index()
  {

    $PricingWeb = Pricing::all()->where('type_service','WEB');
    $PricingMobile = Pricing::all()->where('type_service','Mobile');
    $PricingDesktop = Pricing::all()->where('type_service','Desktop');

    return view('content.home')->with('PricingWeb',$PricingWeb)
                               ->with('PricingMobile',$PricingMobile)
                               ->with('PricingDesktop',$PricingDesktop);
  }
}
