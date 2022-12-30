<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;

class SettingHelper
{
    // public static function getSetting()
    // {
    //     $settings = \App\Models\SettingWebsite::get()->first();
    //     return $settings;
    // }

    public static function getCountDate()
    {
        $count = \App\Models\ViewPage::where([
			['tanggal', date('Y-m-d')],
		])->first();
        return $count;
    }

    public static function getCountMonth()
    {
        $count = \App\Models\ViewPage::all()->sum('count');
        // dd($count->sum('count'));
        return $count;
    }

    public static function getCountYear()
    {
        $count = \App\Models\ViewPage::all()->sum('count');
        return $count;
    }

    public static function getCountAll()
    {
        $count = \App\Models\ViewPage::all()->sum('count');
        return $count;
    }

}
