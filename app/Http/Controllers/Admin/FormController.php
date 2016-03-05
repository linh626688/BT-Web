<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class FormController extends Controller {
	//
	public function index() {
		$title = "Demo";
		return view('admin.forms', compact('title'));
	}

}
