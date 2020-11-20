<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoices;
class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

//=================احصائية نسبة تنفيذ الحالات======================



      $count_all =invoices::count();
      $count_invoices2 = invoices::where('Value_Status', 2)->count();
      $nspainvoices2 = $count_invoices2/ $count_all*100;
    
      $count_invoices1 = invoices::where('Value_Status', 1)->count();
      $nspainvoices1 = $count_invoices1/ $count_all*100;

      $count_invoices3 = invoices::where('Value_Status', 3)->count();
      $nspainvoices3 = $count_invoices3/ $count_all*100;


        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('bar')
        ->size(['width' => 350, 'height' => 200])
        ->labels(['الفواتير الغير مدفوعة','الفواتير المدفوعة','الفواتير المدفوعة جزئيا'])
        ->datasets([
  
            [
                "label" => "نسبة الفواتير",
                'backgroundColor' => "#3087E5",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$nspainvoices2,$nspainvoices1,$nspainvoices3],
            ]
        ])
            ->optionsRaw([
                'legend' => [
                    'display' => true,
                    'labels' => [
                        'fontColor' => 'black',
                        'fontFamily' => 'Cairo',
                        'fontStyle' => 'bold',
                        'fontSize' => 14,

                    ]
                ]
            ]);   

        return view('home', compact('chartjs'));
        
    }
}