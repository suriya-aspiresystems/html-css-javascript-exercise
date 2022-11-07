<?php
	class logoutemployee extends Controller
	{
		public function index()
		{
			session_destroy();
			$this->loadModel("allLogin");
			$this->view("login");
			
		}	
	}
