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
 namespace App\Http\Controllers\Installer\Helpers; class PermissionsChecker { protected $results = []; public function __construct() { $this->results["\x70\145\162\155\x69\163\x73\151\x6f\x6e\x73"] = []; $this->results["\145\x72\162\157\x72\x73"] = null; } public function check(array $folders) { foreach ($folders as $folder => $permission) { if (!($this->getPermission($folder) >= $permission)) { goto WTxTI; } $this->addFile($folder, $permission, true); goto Lv3S2; WTxTI: $this->addFileAndSetErrors($folder, $permission, false); Lv3S2: lJRCj: } iWVe4: return $this->results; } private function getPermission($folder) { return substr(sprintf("\45\x6f", fileperms(base_path($folder))), -4); } private function addFile($folder, $permission, $isSet) { array_push($this->results["\x70\x65\162\x6d\x69\x73\163\x69\x6f\156\x73"], ["\146\x6f\154\144\x65\x72" => $folder, "\x70\145\162\155\151\163\x73\151\157\156" => $permission, "\151\163\123\x65\x74" => $isSet]); } private function addFileAndSetErrors($folder, $permission, $isSet) { $this->addFile($folder, $permission, $isSet); $this->results["\145\x72\x72\157\162\x73"] = true; } }
