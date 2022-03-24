<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.1   |
    |              on 2021-07-31 13:59:49              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/

namespace App\Http\Controllers\Installer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class WelcomeController extends Controller
{
    public function welcome()
    {
        Artisan::call("\163\x74\x6f\162\x61\147\145\72\x6c\x69\156\153");
        return view("\151\x6e\163\164\x61\x6c\154\x65\x72\x2e\x77\145\154\143\157\155\145");
    }
}
