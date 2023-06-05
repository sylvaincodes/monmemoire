<?php

namespace App\Http\Controllers\Back;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BackController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function storage()
    {
        \Artisan::call('storage:link');

        notify()->success(__('messages.filesysteme_actived'), __('alerts.success_title'));

        return redirect()->back();
    }
}