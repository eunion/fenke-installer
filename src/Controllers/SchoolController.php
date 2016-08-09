<?php
/**
 * Created by PhpStorm.
 * User: Kify
 * Date: 2016/8/5
 * Time: 16:17
 */

namespace Eunion\FenkeInstall\Controllers;


use Illuminate\Routing\Controller;

class SchoolController extends Controller
{
    public function config(){
        return view('vendor.installer.config');
    }

    public function postConfig(){
        
    }
}