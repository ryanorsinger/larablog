<?php

use Acme\Transformers\LessonTransformer;

class LessonsController extends ApiController {


	/*
	 * @var Acme\Transformers\LessonTransformer
	 */
	protected $lessonTransformer;

	function __construct(LessonTransformer $lessonTransformer)
	{
		$this->lessonTransformer = $lessonTransformer;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/** Oh No She Didn't 1.0
		 * The following is the "oh no she didn't!" way of getting all.
		 *
		 * return Lesson::all();
		 * This is bad m'kay!
		 * 1. really bad practice...
		 * 2. no way to attach meta-data
		 * 3. Linking the db structure to the API output *(what we're returning to the client is our data structure. We MIGHT want to hide a password key or payment info)
		 * 4. No way to signal headers/response codes (if there's an error or not)
		*/

		/** Oh No She Didn't 1.1
		 * This is still not-optimal, but we're just experimenting with return Response:: as json and setting the message and code.
		 * return Response::json([
		 * 		'data' => $lessons->toArray()
		 * 	], 200);
		 * $lessons = Lesson::all();
		*/

		/** Oh No She Didn't 1.2
		 *		$lessons = Lesson::all();
		 *  	return Response::json([
		 *	  		'data' => $this->transform($lessons)
		 *	    ], 200);
		 */

		$lessons = Lesson::all();

		return $this->respond([
			'data' => $this->lessonTransformer->transformerCollection($lessons->all())
		]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$lesson = Lesson::find($id);

		/* if no lesson, return 'error' with 'message' */
		if (! $lesson)
		{
			return $this->respondNotFound('Lesson does not exist');
		}

		/** Return found lesson id w/ http 200 */
		return Response::json([
			'data' => $this->lessonTransformer->transformCollection($lesson)
			], 200);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
