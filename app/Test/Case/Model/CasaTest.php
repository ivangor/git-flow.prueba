<?php
App::uses('Casa', 'Model');

/**
 * Casa Test Case
 */
class CasaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.casa',
		'app.seccione',
		'app.casas_seccione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Casa = ClassRegistry::init('Casa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Casa);

		parent::tearDown();
	}

}
