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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Support\Facades\Artisan; use Symfony\Component\Console\Output\BufferedOutput; class FinalInstallManager { public function runFinal() { $outputLog = new BufferedOutput(); $this->generateKey($outputLog); $this->publishVendorAssets($outputLog); return $outputLog->fetch(); } private static function generateKey($outputLog) { try { if (!config("\151\x6e\x73\x74\141\x6c\154\x65\162\56\146\151\x6e\141\x6c\56\153\145\x79")) { goto E16yf; } Artisan::call("\153\x65\x79\x3a\x67\x65\x6e\145\162\x61\x74\145", ["\x2d\x2d\146\157\x72\x63\x65" => true], $outputLog); E16yf: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function publishVendorAssets($outputLog) { try { if (!config("\x69\156\x73\164\141\154\x6c\x65\x72\56\146\x69\x6e\x61\154\x2e\x70\165\142\154\151\x73\x68")) { goto Wx32f; } Artisan::call("\166\145\156\x64\157\162\x3a\160\165\142\x6c\x69\163\150", ["\x2d\55\141\x6c\x6c" => true], $outputLog); Wx32f: } catch (Exception $e) { return static::response($e->getMessage(), $outputLog); } return $outputLog; } private static function response($message, $outputLog) { return ["\163\x74\x61\164\x75\163" => "\x65\162\x72\157\162", "\155\145\x73\x73\141\x67\x65" => $message, "\x64\x62\x4f\x75\x74\x70\x75\x74\x4c\157\147" => $outputLog->fetch()]; } }
