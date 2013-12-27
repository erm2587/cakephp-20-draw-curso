<?php
App::uses('Foco', 'Model');

/**
 * Foco Test Case
 *
 */
class FocoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.foco',
		'app.alumno',
		'app.alumnos_foco',
		'app.oferta',
		'app.empresa',
		'app.focos_oferta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Foco = ClassRegistry::init('Foco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foco);

		parent::tearDown();
	}

}
