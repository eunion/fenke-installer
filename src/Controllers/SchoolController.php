<?php
/**
 * Created by PhpStorm.
 * User: Kify
 * Date: 2016/8/5
 * Time: 16:17
 */

namespace Eunion\FenkeInstaller\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Validator;

class SchoolController extends Controller
{
    public function config(){
        return view('vendor.installer.config');
    }

    public function postConfig(Request $request){
        $validate = Validator::make($request->all(),[
            'school_name' => 'required',
            'addr' => 'required',
            'type' => 'required',
            'contact' => 'required'
        ]);


        if($validate->fails()){
            return back()->with(['message' => trans('messages.final.not_empty')])->withInput();
        }else{
            $school_config_model = app(config('installer.config.model'));
            $school_config_model::truncate();
            
            $arr = array();
            foreach ($request->except('_token') as $k=>$v){
                array_push($arr,[
                   'owner'  =>  'installer',
                    'owner_id'  =>  0,
                    'key'   =>  $k,
                    'value' =>  $v
                ]);
            }

            if($school_config_model::insert($arr)){
                return redirect()->route('FenkeInstaller::final')
                    ->with(['message' => trans('messages.final.success')]);
            }else{
                return back()->with(['message'  =>  trans('messages.final.fail')])->withInput();
            }
        }


    }
}