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
 namespace App\Http\Controllers\Installer\Helpers; class InstalledFileManager { public function create() { $installedLogFile = storage_path("\151\x6e\163\x74\141\x6c\154\145\x64"); $dateStamp = date("\x59\x2f\x6d\x2f\144\40\x68\x3a\x69\x3a\163\x61"); if (!file_exists($installedLogFile)) { goto FCWYQ; } $message = trans("\x69\156\x73\x74\x61\154\x6c\x65\x72\137\155\145\163\163\141\x67\x65\163\x2e\x75\160\x64\141\x74\x65\162\x2e\154\x6f\147\x2e\x73\165\x63\143\145\163\x73\x5f\x6d\145\163\163\x61\x67\145") . $dateStamp; file_put_contents($installedLogFile, $message . PHP_EOL, FILE_APPEND | LOCK_EX); goto vmZXz; FCWYQ: $message = trans("\151\x6e\163\x74\x61\154\154\145\x72\137\x6d\x65\163\163\x61\x67\145\x73\56\151\156\163\164\141\154\154\145\144\56\x73\x75\143\143\x65\163\x73\x5f\154\x6f\147\137\x6d\x65\x73\163\x61\147\x65") . $dateStamp . "\xa"; file_put_contents($installedLogFile, $message); vmZXz: return $message; } public function update() { return $this->create(); } }
