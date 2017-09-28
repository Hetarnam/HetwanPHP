<?php

/**
 * @Author: jeanw
 * @Date:   2017-09-04 09:24:55
 * @Last Modified by:   jean
 * @Last Modified time: 2017-09-13 20:44:08
 */

define('DEBUG', false);

require __DIR__.'/vendor/autoload.php';

class Hetwan extends \App\AppKernel
{
	private $core;

	public function __construct()
	{
		parent::__construct();

		$this->core = new \Hetwan\Core\Core();
	}

	public function run()
	{
		$this->core->makeExchangeClient();
		$this->core->makeGameServer();
		$this->core->run();
	}

	public function getCore()
	{
		return $this->core;
	}
}

$hetwan = new Hetwan;
$hetwan->run();