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

use Illuminate\Routing\Controller;
use App\Http\Controllers\Installer\Helpers\InstalledFileManager;
use App\Http\Controllers\Installer\Helpers\DatabaseManager;

class UpdateController extends Controller
{
    use \App\Http\Controllers\Installer\Helpers\MigrationsHelper;
    public function welcome()
    {
        return view("\151\x6e\163\x74\x61\x6c\x6c\145\x72\56\x75\x70\x64\141\164\145\x2e\x77\x65\x6c\x63\x6f\x6d\x65");
    }
    public function overview()
    {
        $migrations = $this->getMigrations();
        $dbMigrations = $this->getExecutedMigrations();
        return view("\x69\156\x73\164\141\154\x6c\145\162\56\x75\x70\x64\141\x74\x65\x2e\157\x76\145\162\166\x69\145\x77", ["\x6e\165\x6d\x62\145\x72\x4f\x66\125\x70\144\141\164\145\x73\120\x65\x6e\x64\151\156\x67" => count($migrations) - count($dbMigrations)]);
    }
    public function database()
    {
        $databaseManager = new DatabaseManager();
        $response = $databaseManager->migrateAndSeed();
        return redirect()->route("\x4c\x61\162\141\x76\x65\x6c\x55\x70\144\141\x74\x65\162\x3a\72\x66\x69\156\141\x6c")->with(["\x6d\145\163\x73\x61\x67\145" => $response]);
    }
    public function finish(InstalledFileManager $fileManager)
    {
        $fileManager->update();
        return view("\151\156\x73\x74\141\x6c\x6c\145\162\56\165\160\x64\x61\164\x65\56\146\x69\156\x69\x73\x68\x65\144");
    }
}
