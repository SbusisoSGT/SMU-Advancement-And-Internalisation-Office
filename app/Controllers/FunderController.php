<?php
	require_once(__DIR__.'\..\Config\Database.php');
	require_once(__DIR__.'\..\Models\Funder.php');

	class FunderController
	{
		
        /**
		* Store the funder's details 
		*
		* @param array $request
		* @return $result
		*/
		public function store(array $request)
		{
			$funder = new Funder(new Database());
			$funder->setProperties($request);
			$result = $funder->save();
			
			return $result;
		}

        /**
		* Get All the funders details 
		*
		* @return array $result
		*/
		public function index()
		{
			$result = Funder::all();
			
			return $result;
		}

		/**
		* Get One funder details 
		*
		* @param int $id
		* @return $result
		*/
		public function show(int $id)
		{
			$result = Funder::find($id);
			
			return $result;
		}

		/**
		* Edits one funder
		*
		* @param array $request
		* @return $result
		*/
		public function edit(array $request)
		{
			$result = Funder::update($request);
			
			return $result;
		}

		/**
		* Delete funder instance
		*
		* @param int $id
		* @return void
		*/
		public function destroy(int $id)
		{
			$result = Funder::delete($id);
			
			return $result;
		}
	}