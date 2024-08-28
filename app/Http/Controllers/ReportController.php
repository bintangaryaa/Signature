<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataReport;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $query = DataReport::query();

        if ($request->filled('branch')) {
            $query->where('branch', 'like', '%' . $request->branch . '%');
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        $dataReports = $query->paginate(10);

        $totalData = DataReport::count();
        $totalUnclassified = DataReport::sum('unclassified_data');
        $totalClassified = DataReport::sum('classified_data');
        $totalUnapproved = DataReport::sum('unapproved_data');
        $totalApproved = DataReport::sum('approved_data');
        $totalRejected = DataReport::sum('rejected_data');

        return view('report', compact(
            'dataReports', 'totalData', 'totalUnclassified',
            'totalClassified', 'totalUnapproved', 'totalApproved', 'totalRejected'
        ));
    }
}
