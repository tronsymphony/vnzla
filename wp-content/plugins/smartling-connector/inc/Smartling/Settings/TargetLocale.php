<?php

namespace Smartling\Settings;

/**
 * Class TargetLocale
 *
 * @package Smartling\Settings
 */
class TargetLocale extends Locale
{

    /**
     * @var string
     */
    private $smartlingLocale;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @param array $objState
     *
     * @return TargetLocale
     */
    public static function fromArray(array $objState)
    {
        $obj = new self();
        $properties = [
            'smartlingLocale',
            'enabled',
            'blogId',
        ];

        foreach ($properties as $property) {
            if (array_key_exists($property, $objState)) {
                $method = vsprintf('set%s', [ucfirst($property)]);
                $obj->{$method}($objState[$property]);
            }
        }

        return $obj;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'smartlingLocale' => $this->getSmartlingLocale(),
            'enabled'         => $this->isEnabled(),
            'blogId'          => $this->getBlogId(),
        ];
    }

    /**
     * @return string
     */
    public function getSmartlingLocale()
    {
        return $this->smartlingLocale;
    }

    /**
     * @param string $smartlingLocale
     */
    public function setSmartlingLocale($smartlingLocale)
    {
        $this->smartlingLocale = $smartlingLocale;
    }

    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }
}