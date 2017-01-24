<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return "Main page";
	}

	public function getAbout() {
		return "About Page";
	}

	public function getContact() {
		return "Contact Page";
	}
	
}