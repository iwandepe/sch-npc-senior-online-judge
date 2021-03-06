<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TestcaseContent extends \App\Entity\TestcaseContent implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'testcase', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'input', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'output', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'image', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'image_thumb'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'testcase', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'input', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'output', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'image', '' . "\0" . 'App\\Entity\\TestcaseContent' . "\0" . 'image_thumb'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TestcaseContent $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setTestcase(\App\Entity\Testcase $testcase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTestcase', [$testcase]);

        return parent::setTestcase($testcase);
    }

    /**
     * {@inheritDoc}
     */
    public function getTestcase(): \App\Entity\Testcase
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTestcase', []);

        return parent::getTestcase();
    }

    /**
     * {@inheritDoc}
     */
    public function setInput($input)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInput', [$input]);

        return parent::setInput($input);
    }

    /**
     * {@inheritDoc}
     */
    public function getInput()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInput', []);

        return parent::getInput();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutput($output)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutput', [$output]);

        return parent::setOutput($output);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutput()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutput', []);

        return parent::getOutput();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageThumb($imageThumb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageThumb', [$imageThumb]);

        return parent::setImageThumb($imageThumb);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageThumb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageThumb', []);

        return parent::getImageThumb();
    }

}
