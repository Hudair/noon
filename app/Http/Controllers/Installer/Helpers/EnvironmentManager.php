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
 namespace App\Http\Controllers\Installer\Helpers; use Exception; use Illuminate\Http\Request; class EnvironmentManager { private $envPath; private $envExamplePath; public function __construct() { $this->envPath = base_path("\56\x65\156\x76"); $this->envExamplePath = base_path("\x2e\x65\x6e\x76\x2e\x65\170\141\155\160\154\x65"); } public function getEnvContent() { if (file_exists($this->envPath)) { goto Ifi4V; } if (file_exists($this->envExamplePath)) { goto LJtBO; } touch($this->envPath); goto Z7yNs; LJtBO: copy($this->envExamplePath, $this->envPath); Z7yNs: Ifi4V: return file_get_contents($this->envPath); } public function getEnvPath() { return $this->envPath; } public function getEnvExamplePath() { return $this->envExamplePath; } public function saveFileClassic(Request $input) { $message = trans("\151\x6e\x73\164\x61\x6c\154\145\x72\137\155\x65\163\x73\141\147\x65\x73\56\x65\156\x76\151\162\157\x6e\x6d\x65\156\164\x2e\163\165\x63\x63\x65\163\x73"); try { file_put_contents($this->envPath, $input->get("\x65\x6e\166\103\157\x6e\146\151\147")); } catch (Exception $e) { $message = trans("\x69\x6e\x73\164\141\154\154\145\x72\137\155\x65\x73\x73\141\x67\145\163\x2e\145\156\x76\151\162\157\156\x6d\145\156\164\56\145\162\162\x6f\162\x73"); } return $message; } }
