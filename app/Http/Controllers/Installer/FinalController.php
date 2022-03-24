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
use App\Http\Controllers\Installer\Helpers\DatabaseManager;
use App\Http\Controllers\Installer\Helpers\EnvironmentManager;
use App\Http\Controllers\Installer\Helpers\FinalInstallManager;
use App\Http\Controllers\Installer\Helpers\InstalledFileManager;

class FinalController extends Controller
{
    public function final(FinalInstallManager $finalInstall, EnvironmentManager $environment)
    {
        $finalMessages = $finalInstall->runFinal();
        $finalEnvFile = $environment->getEnvContent();
        return view("\151\x6e\x73\x74\x61\x6c\x6c\145\x72\x2e\146\151\156\x69\163\150\145\144", compact("\146\151\156\x61\154\x4d\x65\x73\x73\x61\147\145\x73", "\x66\151\156\141\x6c\x45\x6e\x76\x46\151\x6c\145"));
    }
    public function seedDemo(DatabaseManager $databaseManager)
    {
        $response = $databaseManager->seedDemoData();
        return redirect()->route("\x49\x6e\x73\164\x61\x6c\154\x65\x72\x2e\146\x69\156\151\x73\x68");
    }
    public function finish(InstalledFileManager $fileManager)
    {
        $finalStatusMessage = $fileManager->update();
        return redirect()->to(config("\151\156\163\164\x61\x6c\154\x65\162\x2e\x72\145\144\151\162\x65\143\164\x55\x72\154"))->with("\x6d\x65\x73\163\x61\x67\145", $finalStatusMessage);
    }
}
