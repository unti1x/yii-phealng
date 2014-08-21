<?php

class YiiPhealNG {
	public $pheal_class;

	public $config = [];

	private $_pheal;

	public function init() {
		Yii::setPathOfAlias('Pheal', $this->pheal_class);
		Yii::import('Pheal');

		$cfg = [
			  "keyID" => (isset($this->config['keyID']) ? $this->config['keyID'] : null)
			, "vCode" => (isset($this->config['vCode']) ? $this->config['vCode'] : null)
			, "scope" => (isset($this->config['scope']) ? $this->config['scope'] : "account")
		];

		$this->config = $cfg;

		$this->_pheal = new \Pheal\Pheal($this->config['keyID'], $this->config['vCode'], $this->config['scope']);

	}

	public function __call($name, $parameters) {
		return call_user_func_array([$this->_pheal, $name], $parameters);
	}

	public function __get($name) {
		return $this->_pheal->$name;
	}

}
