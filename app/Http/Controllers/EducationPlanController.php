<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class EducationPlanController extends Controller
{

	public function showPlanProgrammingPHP () {
		$this->checkAuthData();
		$this->getContentData($course_id = 1);
		return view('education_plan_programming_php')->with('authData', $this->authData)->with('contentData', $this->contentData);
	}

	public function showPlanManagementProduct () {
		$this->checkAuthData();
		$this->getContentData($course_id = 2);
		return view('education_plan_management_product')->with('authData', $this->authData)->with('contentData', $this->contentData);
	}

		public function showPlanProgrammingJavaScript () {
		$this->checkAuthData();
		$this->getContentData($course_id = 3);
		return view('education_plan_programming_javascript')->with('authData', $this->authData)->with('contentData', $this->contentData);
	}

}