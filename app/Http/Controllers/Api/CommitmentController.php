<?php

namespace App\Http\Controllers\Api;
use App\Commitment;
use App\Http\Resources\Commitment as CommitmentResources;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommitmentController extends Controller
{
    //
    public function store(Request $request){
        $commitments = new Commitment;
        $commitments->commitment = $request->input('commitment');
        $commitments->useremail = $request->input('useremail');
        $commitments->cheerleader = $request->input('cheerleader');
        $commitments->start = $request->input('start');
        $commitments->end = $request->input('end');
        $commitments->referee = $request->input('referee');
        $commitments->stake = $request->input('stake');
        $commitments->donated = $request->input('donated');
        $commitments->filereport = $request->input('filereport');

        $commitments->save();
        return new CommitmentResources($commitments);
    }
    public function show($id)
    {
        $event = Commitment::where('useremail', $id)->get();

        if ($event) {
            return CommitmentResources::collection($event);
        } else {
            return response()->json(['error' => 'no comitment', 'status' => false], 404);
        }
    }
    public function showone($id)
    {
        $event = Commitment::find($id);

        if ($event) {
            return new CommitmentResources($event);
        } else {
            return response()->json(['error' => 'no comitment', 'status' => false], 404);
        }
    }

//    public function update(Request $request, $id)
//    {
//        $event = Commitment::where();
//        if ($event) {
//            $event->title = $request->input('title');
//            $event->description = $request->input('description');
//            $event->location = $request->input('location');
//            $event->startdate = $request->input('startdate');
//            $event->enddate = $request->input('enddate');
//            $event->starttime = $request->input('starttime');
//            $event->endtime = $request->input('endtime');
//            $event->website = $request->input('website');
//            $event->facebook = $request->input('facebook');
//            $event->twitter = $request->input('twitter');
//            $event->instagram = $request->input('instagram');
//            $event->eventimage = $request->input('eventimage');
//            $event->publish = $request->input('publish');
//
//        }
//    }
    public function delete(){
        $event = Commitment::where();
        if ($event->delete()){
            return new Commitment($event);
        }
    }
}
