<?php
App::uses('Seccione', 'Model');

/**
 * Seccione Test Case
 */
class SeccioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seccione',
		'app.seccione_estado',
		'app.seccione_visibilidade',
		'app.imagene',
		'app.lote',
		'app.casa',
		'app.casas_seccione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Seccione = ClassRegistry::init('Seccione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seccione);

		parent::tearDown();
	}

}
