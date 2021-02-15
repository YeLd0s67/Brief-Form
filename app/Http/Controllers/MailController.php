<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Mail;
  
class MailController extends Controller
{
    public function index()
    {
      return view('form');   
    }

    public function send(Request $request){
        $this->validate($request, [
            'phone_num'     =>  'required',
            'contact_name' =>  'required',
            'website' => 'required',
            'goods' => 'required'

           ]);
      
        $data = array(
                  'company_name'      =>  $request->company_name,
                  'contact_name'   =>   $request->contact_name,
                  'phone_num'   => $request->phone_num,
                  'website'   =>   $request->website,
                  'email'   =>   $request->email,
                  'other'   =>   $request->other,
                  'area'   =>   $request->area,
                  'goods'   =>   $request->goods,
                  'goal_auditory'   =>   $request->goal_auditory,
                  'region_work'   =>   $request->region_work,
                  'comp_avantages'   =>   $request->comp_avantages,
                  'utp'   =>   $request->utp,
                  'year_found'   =>   $request->year_found,
                  'competitor'   =>   $request->competitor,
                  'goal'   =>   $request->goal,
                  'goal_number'   =>   $request->goal_number,
                  'near_problem'   =>   $request->near_problem,
                  'avg_bill'   =>   $request->avg_bill,
                  'ltv'   =>   $request->ltv,
                  'conversion'   =>   $request->conversion,
                  'discount'   =>   $request->discount,
                  'history'   =>   $request->history,
                  'reviews'   =>   $request->reviews,
                  'goal_two'   =>   $request->goal_two,
                  'goal_number_two'   =>   $request->goal_number_two,
                  'other_two'   =>   $request->other_two,
                  'comments'   =>   $request->comments,
                  'golden_papers' => $request->golden_papers

              );
  
        $pdf = PDF::loadView('TestMail', $data);
  
        Mail::send('short', $data, function($message)use($data, $pdf) {
            $message->to('info@nextin.me')
                    ->subject('Бриф на создание Landing page')
                    ->attachData($pdf->output(), "text.pdf");
        });
  
        return back();

    }

}
