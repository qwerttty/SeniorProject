<?php
/* Donations Test cases generated on: 2010-04-23 23:04:49 : 1272066169*/
App::import('Controller', 'Donations');

class TestDonationsController extends DonationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DonationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.donation', 'app.booking', 'app.volunteer', 'app.location', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.page', 'app.price', 'app.line_item', 'app.menu', 'app.document', 'app.ecuador_profile', 'app.spanish_profile');

	function startTest() {
		$this->Donations =& new TestDonationsController();
		$this->Donations->constructClasses();
	}

	function endTest() {
		unset($this->Donations);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>