<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\tw_account;

use Log;
use Illuminate\Support\Facades\Hash;
use App\ApiService\Tw\SetToken;

// use Log;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $req)
    {
    
      
        $settoken = app()->makewith("App\ApiService\Tw\SetToken");
        // oauth_token
        // oauth_token_secret
        // user_id
        // screen_name
        $settoken_query = $settoken->collback_to_app($req);
        
        if ($settoken_query === null) {

            $tw_account_array = DB::table('tw_accounts')->where('app_id', Auth::id())->orderBy('created_at', 'asc')->get();
            return view('home', ["tw_account_array" => json_encode($tw_account_array)]);
    
        }
        //アクセストークン
        if (isset($settoken_query['user_id'])) {
            // //DBに追加
            Log::debug($settoken_query);
            $duplication_chk = tw_account::where("user_id", $settoken_query["user_id"])->first();

            if (isset($duplication_chk)) {
                //すでに登録済みの場合
                $tw_account_array = DB::table('tw_accounts')->where('app_id', Auth::id())->orderBy('created_at', 'asc')->get();
                $tw_account_array['tw_duplication'] = true;
                $tw_account_array['tw_return_api_flg'] = true;
                return view('home', ["tw_account_array" => json_encode($tw_account_array)]);
                
            } 

            // DBに追加
            $tw_account = new tw_account;
            $tw_account->app_id = Auth::id();
            $tw_account->user_id = $settoken_query['user_id'];
            $tw_account->oauth_token = $settoken_query['oauth_token'];
            $tw_account->oauth_token_secret = $settoken_query['oauth_token_secret'];
            $tw_account->screen_name = $settoken_query['screen_name'];
            $tw_account->save();
 
            $tw_account_array = DB::table('tw_accounts')->where('app_id', Auth::id())->orderBy('created_at', 'asc')->get();
            $tw_account_array['tw_return_api_flg'] = true;
            return view('home', ["tw_account_array" => json_encode($tw_account_array)]);
        
        }

        $tw_account_array = DB::table('tw_accounts')->where('app_id', Auth::id())->orderBy('created_at', 'asc')->get();
        return view('home', ["tw_account_array" => json_encode($tw_account_array)]);

    }
}