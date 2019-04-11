<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helpers\Api;
use App\Services\EventService;
use Illuminate\Support\Facades\Validator;
class EventController extends Controller
{
    protected $eventService;
    public function __construct(EventService $eventService) {
        $this->eventService = $eventService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addEvent(Request $request) {
//        var_dump($request);
//        die();
        $validator = Validator::make($request->all(), [
            'summary' => 'required|string|max:100',
            'email' => 'required',
            'group_id' => 'required',
            'room_id' => 'required',
            'timeStart' => 'required',
            'timeEnd' => 'required',
            'event_date' => 'required',
        ]);
        if ($validator->fails()) {
//            return Api::r_response("", "Validate error", 'E400');
            echo "E400";
        }

        $result = $this->eventService->createEvent($request->all());

        if ($result) {
//            return Api::r_response($result, 'Create Event success', 'S200');
            echo "s200";
        }
//        return Api::r_response("", 'Server error', 'E500');
//        echo "E500";
    }
    public function getEvent($dateStart, $dateEnd)
    {
        $result = $this->eventService->searchEvent($dateStart, $dateEnd);
        if (sizeof($result) == 0) {
            return 'fail';
        }
        return $result;
    }
}
