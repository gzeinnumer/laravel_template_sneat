<?php

namespace App\Http\Controllers;

use App\Helpers\CreateApiLog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function returnErrorMessage($th, $saveLog)
    {
        $response = json_encode([
            'code' => 500,
            'title' => "Info",
            'msg' => $this->saveMessage($th->getMessage()),
        ]);

        CreateApiLog::writeLogUpdate($response, 500, $saveLog);
        return $response;
    }

    // return $this->debug($data);
    public static function debug($str)
    {
        // return ConfigTableController::debug(json_encode($enableColumn, JSON_PRETTY_PRINT));
        // return ConfigTableController::debug(json_encode($columns));
        Session::put('Debug', json_encode($str, JSON_PRETTY_PRINT));
        $response = json_encode([
            'code' => 200,
            'title' => "Debug",
            'msg' => json_encode($str, JSON_PRETTY_PRINT),
        ]);
        return $response;
    }

    public static function saveMessage($msg)
    {
        if (App::hasDebugModeEnabled()) {
            return $msg;
        }
        return "Something When Wrong";
    }
}
