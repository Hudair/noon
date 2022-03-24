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
 namespace App\Http\Controllers\Installer; use Exception; use Illuminate\Support\Facades\DB; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\DatabaseManager; class DatabaseController extends Controller { private $databaseManager; public function __construct(DatabaseManager $databaseManager) { $this->databaseManager = $databaseManager; } public function database() { if ($this->checkDatabaseConnection()) { goto UlRdO; } return redirect()->back()->withErrors(["\144\141\164\x61\x62\x61\163\x65\137\143\157\156\x6e\145\143\164\x69\x6f\156" => trans("\151\x6e\x73\164\x61\154\x6c\x65\x72\137\155\145\163\163\141\x67\x65\x73\56\145\x6e\x76\x69\x72\x6f\156\155\x65\x6e\x74\x2e\167\151\172\141\x72\x64\x2e\146\x6f\x72\x6d\x2e\x64\x62\137\x63\x6f\x6e\x6e\145\143\164\x69\157\x6e\137\146\141\151\154\145\x64")]); UlRdO: ini_set("\x6d\x61\170\x5f\x65\170\145\143\165\x74\151\157\156\x5f\164\x69\155\145", 600); $response = $this->databaseManager->migrateAndSeed(); return redirect()->route("\111\x6e\163\x74\141\x6c\x6c\145\162\x2e\146\x69\156\141\154")->with(["\x6d\145\x73\x73\x61\147\145" => $response]); } private function checkDatabaseConnection() { try { DB::connection()->getPdo(); return true; } catch (Exception $e) { return false; } } }
