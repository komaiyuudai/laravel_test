<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use Route;
use DB;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $params = config('breadcrump.'.Route::currentRouteName());
        $breadCrumps = [];
        $breadCrump = null;
        if (!is_null($params)) {
            $paths = explode('/', Request::path());
            foreach ($params['hierarchy'] as $key => $val) {
                if (!is_null(config('breadcrump.'.$val.'.table'))) {
                    $result = DB::table(config('breadcrump.'.$val.'.table'))->select($params['column'])->where('id', $paths[$key])->first();
                    $breadCrumps[] = collect($result)->get($params['column']);
                } else {
                    $breadCrumps[] = config('breadcrump.'.$val.'.content');
                }
            }
        }
        if (!empty($breadCrumps)) {
            $breadCrump .= 'HOME > ';
            $breadCrump .= implode($breadCrumps, ' > ');
        }
        View::share('breadCrump', $breadCrump);
    }
}
