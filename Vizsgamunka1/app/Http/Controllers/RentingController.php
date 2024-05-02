<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renting;


class RentingController extends Controller
{
    public function getRentings() {
        $rentings=Renting::all();
        return response()->json(["message"=>"ok","data"=>$rentings],200);
    }

    public function addRenting(Request $request){
        $input =$request->all();
        $renting=new Renting;
        $renting->writer = $input["writer"];
        $renting->type = $input["type"];
        $renting->title = $input["title"];
        $renting->renter_id = $input["renter_id"];
        $renting->save();

        return response()->json(["message"=>"sikere kiirás","data"=>$renting],200);      
    }
    public function getRenting($id) {
        $renting=Renting::find($id);
        return response()->json(["message"=>"ok","data"=>$renting],200);
    }
    public function modifyRenting(Request $request, $id){
        $input =$request->all();
        $renting=Renting::find($id);
        $renting->writer = $input["writer"];
        $renting->type = $input["type"];
        $renting->title = $input["title"];
        $renting->renter_id = $input["renter_id"];
        $renting->save();

        return response()->json(["message"=>"sikere módosítás","data"=>$renting],200);      
    }
    public function deleteRenting($id) {
        $renting=Renting::find($id);
        $renting->delete();
        return response()->json(["message"=>"get deleted lol","data"=>$renting],200);
    }
}
