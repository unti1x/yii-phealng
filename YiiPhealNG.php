<?php

/**
 * PhealNG wrapper for Yii Framework
 *
 * @author unti1x <metallist90@yahoo.com>, nek <nek@srez.org>
 * @link https://github.com/3rdpartyeve/phealng
 * @link https://community.eveonline.com/support/api-key/
 * @link http://wiki.eve-id.net/APIv2_Page_Index
 */
class YiiPhealNG {

    /**
     * Version
     *
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * Pheal library path
     *
     * @var string
     */
    public $phealPath;
    
    /**
     * <pre>
     * array(
     *     'keyId'  => 'Your keyId',
     *     'vCode'  => 'Your vCode',
     *     'scope'  => 'Enter scope'
     * )
     * </pre>
     *
     * @var array
     */
    public $config = array();

    /**
     * 
     */
    public function init() {
        Yii::setPathOfAlias('Pheal', $this->phealPath);
        Yii::import('Pheal');
    }
    
    /**
     * @param string $name
     * @param mixed $parameters
     * @return Pheal
     */
    public function __call($name, $parameters) {
        $this->getInstance();
        return call_user_func_array(array($this->getInstance(), $name), $parameters);
    }

    /**
     * @param string $name
     * @return Pheal
     */
    public function __get($name) {
        return $this->getInstance()->$name;
    }

    /**
     * @return Pheal
     */
    private function getInstance() {
        $config = array(
            'keyId' => (isset($this->config['keyId']) ? $this->config['keyId'] : null),
            'vCode' => (isset($this->config['vCode']) ? $this->config['vCode'] : null),
            'scope' => (isset($this->config['scope']) ? $this->config['scope'] : 'account')
        );
        $this->config = $config;
        $pheal = new \Pheal\Pheal($this->config['keyId'], $this->config['vCode'], $this->config['scope']);
        return $pheal;
    }

}
