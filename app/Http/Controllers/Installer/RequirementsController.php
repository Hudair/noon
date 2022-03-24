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
 namespace App\Http\Controllers\Installer; use Illuminate\Routing\Controller; use App\Http\Controllers\Installer\Helpers\RequirementsChecker; class RequirementsController extends Controller { protected $requirements; public function __construct(RequirementsChecker $checker) { $this->requirements = $checker; } public function requirements() { $phpSupportInfo = $this->requirements->checkPHPversion(config("\151\156\x73\164\141\154\x6c\x65\162\x2e\x63\157\162\145\x2e\x6d\151\x6e\120\x68\160\126\145\162\x73\x69\157\156"), config("\x69\156\163\x74\x61\x6c\154\145\162\x2e\x63\x6f\162\145\x2e\155\x61\170\x50\x68\x70\x56\x65\162\163\x69\157\x6e")); $requirements = $this->requirements->check(config("\151\x6e\x73\164\141\x6c\154\x65\x72\x2e\162\x65\x71\x75\151\162\145\155\145\x6e\x74\x73")); return view("\x69\156\x73\x74\x61\154\x6c\x65\x72\x2e\x72\145\161\165\151\162\x65\155\x65\x6e\164\x73", compact("\162\145\161\165\x69\x72\145\x6d\x65\x6e\x74\163", "\160\x68\x70\123\x75\x70\160\x6f\x72\x74\x49\156\146\157")); } }
