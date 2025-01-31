<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\CategoryChart;
use App\Charts\VisitTimeChart;
use App\Charts\VisitorChart;
use App\Charts\TotalVisitorChart;
use App\Charts\VisitCompareChart;
use App\Charts\TrafficChart;

class PageController extends Controller
{
    public function dashboard(CategoryChart $categoryChart, VisitTimeChart $visitTimeChart)
    {
        return view('pages.dashboard', [
            'categoryChart' => $categoryChart->build(),
            'visitTimeChart' => $visitTimeChart->build()
        ]);
    }

    public function pengunjung(VisitorChart $visitorChart)
    {
        return view ('pages.pengunjung', [
            'visitorChart' => $visitorChart->build()
        ]);
    }

    public function total_pengunjung (TotalVisitorChart $totalVisitorChart, CategoryChart $categoryChart)
    {
        return view ('pages.total-pengunjung', [
            'totalVisitorChart' => $totalVisitorChart->build(),
            'categoryChart' => $categoryChart->build()
        ]);
    }

    public function pengunjung_hari_ini(VisitCompareChart $visitCompareChart, TrafficChart $trafficChart)
    {
        return view ('pages.pengunjung-hari-ini', [
            'visitCompare' => $visitCompareChart->build(),
            'trafficChart' => $trafficChart->build()
        ]);
    }

    public function pengunjung_aktif()
    {
        return view ('pages.pengunjung-aktif');
    }

    public function history_pengunjung()
    {
        return view ('pages.pengunjung#history');
    }

    public function trafik_website()
    {
        return view ('pages.trafik');
    }

    public function notifikasi()
    {
        return view ('pages.notifikasi');
    }

}
