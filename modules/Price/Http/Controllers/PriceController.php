<?php namespace Modules\Price\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Price\Entities\AssignmentType;
use Illuminate\Http\request;
use Validator;

class PriceController extends Controller {
	
	public function index()
	{
		return view('price::index');
	}
	public function assignment(){

		$assignments = AssignmentType::all();
		return view('price::assignment')->with('assignmentTypes',$assignments);
	}
	public function addAssignmentType(){
			return view('price::addAssignmentType');
	}
	public function createAssignmentType(Request $request){
		// $AssignmentType = AssignmentType::create($request['name'],$request['parent_id'],$request['status']);
		// return $AssignmentType;
		$rules = array(
          'name' => 'required',
          'parent_id' => 'required|numeric'
      );

    $validator = Validator::make($request->all(), $rules);

    
    if ($validator->fails())
		{
			$this->throwValidationException(
				$data, $validator
			);
		}

    try{
     
      $assignmentType = new AssignmentType();

      $assignmentTypeInput = array_filter($request->all(), 'strlen');

      $assignmentType->fill($assignmentTypeInput)->save();
      return redirect('price/assignment');

    } catch(\Illuminate\Database\QueryException $e){
      return Response::json(['status'=>'fail', 'message'=>'Invalid data.'.$e ], 422);
    }

	}
	
}