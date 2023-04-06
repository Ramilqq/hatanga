<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();

        if (isset($data['date_start'])){
            $tours = Tour::where('date_start', '<=', $data['date_start'])->where('date_end', '>=', $data['date_start'])->paginate(10);
        }else{
            $tours = Tour::paginate(10);
        }
        $tours = $tours->toArray();

        return view('web.tour', [
            'tours' => $tours['data'],
            'links' => $tours['links'],
        ]);
    }

    public function get($slug)
    {
        $tour = Tour::where('slug', $slug)->first()->toArray();
        $more_tours = Tour::where('slug', '!=', $slug)->inRandomOrder()->limit(2)->get()->toArray();
        
        $breadcrumb = [
            'Календарь мероприятий' => 'tour',
            $tour['title'] => ''
        ];
        //dd(request()->route());
        return view('web.tour_single', [
            'tour' => $tour,
            'more_tours' => $more_tours,
            'breadcrumb' => $breadcrumb,
        ]);
    }
}
