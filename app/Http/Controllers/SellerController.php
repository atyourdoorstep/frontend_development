<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\SellerFolder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{
    public function registerSeller(Request $request)
    {
        $user=$request->all()['user'];
        $id=$user->id;
        if($user->role_id==2)
        {
            return response()->json(['success'=>false,'message'=>'This user is already registered as a service provider'],400);
        }
        $data = Validator::make($request->all(),
            [
                'user_name'=>['required','string','max:20','unique:sellers'],
                'category_id'=>['required'],
                ]
        );
        if($data->fails())
            return response()->json(['success'=>false,'message'=>$data->messages()->all()],400);
        $data=$request->all();
        $data['user_id']=$id;

        $usr=User::findOrFail($id);
        $usr->role_id=2;
        $usr->update();

        $seller=Seller::create($data);
        $folder=app('App\Http\Controllers\SellerFolderController')->create($seller->user_name,$seller->id);
        return response()->json(
            [
                'success'=>true,
                'seller'=>$seller,
            ]
            ,200
        );
    }
    public function getSellerInfo(Request $request)
    {
        $user=$request->all()['user'];
        $seller=User::find($user->id)->seller;
        return [
            'success'=>true,
            'user'=>$user,
            'sellerProfile'=>$seller,
        ];
    }
}
