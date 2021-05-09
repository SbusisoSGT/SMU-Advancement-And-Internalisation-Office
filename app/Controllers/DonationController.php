<?php
	require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Config\Database.php");
	require_once("C:\\xampp\htdocs\SMU-Advancement-And-Internalisation-Office\app\Models\Donation.php");


	class DonationController
	{
		
        /**
		* Store the funder's details 
		*
		* @param array $request
		* @return $result
		*/
		public function store(array $request)
		{
			$donation = new Donation(new Database());
			$donation->setProperties($request);
			$result = $donation->save();
			
			return $result;
		}

        /**
		* Get all the donations
		*
		* @return array $result
		*/
		public function index()
		{
			$result = Donation::all();
			
			return $result;
		}

		/**
		* Get one donation
		*
		* @param int $id
		* @return $result
		*/
		public function show(int $id)
		{
			$result = Donation::find($id);
			
			return $result;
		}
	}