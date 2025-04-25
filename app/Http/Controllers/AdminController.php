<?php

namespace App\Http\Controllers;

use App\Models\InternshipRegistration;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        // 1. Count totals
        $totalStudents   = InternshipRegistration::count();
        $paidStudents    = InternshipRegistration::where('payment_status', 1)->count();
        $unpaidStudents  = InternshipRegistration::where('payment_status', 0)->count();

        // 2. Calculate income (you'll need an amount_paid column or map durations)
        // Here’s an example using a fixed price map:
        $priceMap = [
            '30'  => 1200,
            '45'  => 1700,
            '180' => 5500,
        ];
        $totalIncome = InternshipRegistration::where('payment_status', 1)
            ->get()
            ->sum(fn($r) => $priceMap[$r->duration] ?? 0);

        // 3. Prepare chart data (monthly income)
        $monthly = InternshipRegistration::where('payment_status', 1)
            ->selectRaw("DATE_FORMAT(created_at, '%b %Y') as month,
                         SUM(CASE 
                           WHEN duration = '30'  THEN {$priceMap['30']}
                           WHEN duration = '45'  THEN {$priceMap['45']}
                           WHEN duration = '180' THEN {$priceMap['180']}
                           ELSE 0 END) as total")
            ->groupBy('month')
            ->orderByRaw("MIN(created_at)")
            ->get();

        $chartLabels = $monthly->pluck('month')->toArray();
        $chartData   = $monthly->pluck('total')->toArray();

        // 4. Pass everything to the view
        return view('admin.dashboard', compact(
            'totalStudents',
            'paidStudents',
            'unpaidStudents',
            'totalIncome',
            'chartLabels',
            'chartData'
        ));
    }
}
