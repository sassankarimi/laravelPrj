<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Jobs\CompileReports;

class PagesController extends Controller
{
    public function home(Request $request)
    {
//        $this->dispatch(new CompileReports($request->input('reportId')));
//        return 'done!';
        Cache::put('name','sassan karimi',1);
       return Cache::get('name');

    }
}
