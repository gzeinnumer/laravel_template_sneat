<?php

namespace App\Helpers;

use App\Models\DevUnitsModel;
use App\Models\MStatusModel;
use App\Models\MTopupPriceModel;
use App\Models\NasModel;
use App\Models\RadGroupCheckModel;
use App\Models\User;
use stdClass;

class SaveMasterData
{
    public static function lastNasName()
    {
        $res = "";
        $ip = NasModel::select('nasname')->orderBy('id', 'desc')->first()->nasname;
        $ip = explode('.', $ip);
        // if($start_ip[2]<=255){
        //     $start_ip[2];
        // }
        $ip[3] = $ip[3] + 1;
        if ($ip[3] == 256) {
            $ip[2] = $ip[2] + 1;
            $ip[3] = 1;
        }
        $res = $ip[0] . "." . $ip[1] . "." . $ip[2] . "." . $ip[3];
        return $res;
    }

    public static function radgroupcheck($type)
    {
        $data = RadGroupCheckModel::select()->where('type', $type)->orderby('groupname', 'desc')->get();
        return $data;
    }

    public static function mStatusByType($id_type_status)
    {
        $data = MStatusModel::where(["id_type_status" => $id_type_status])->get();
        return $data;
    }

    public static function mitra()
    {
        $data = User::where(["id_level" => 2])->get();
        return $data;
    }

    public static function devUnits()
    {
        $data = DevUnitsModel::where(['flag_active' => 1])->where('id', '!=', 1)->get();
        return $data;
    }

    public static function mTopupPrice()
    {
        $data = MTopupPriceModel::where(['flag_active' => 1])->get();
        return $data;
    }
}
