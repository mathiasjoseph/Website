<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 21/12/16
 * Time: 10:57
 */

namespace Miky\Component\Website\Model;


class Website
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $urlTest;

    /**
     * @var string
     */
    protected $urlProd;

    /**
     * @var string
     */
    protected $urlDev;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUrlTest()
    {
        return $this->urlTest;
    }

    /**
     * @param string $urlTest
     */
    public function setUrlTest($urlTest)
    {
        $this->urlTest = $urlTest;
    }

    /**
     * @return string
     */
    public function getUrlProd()
    {
        return $this->urlProd;
    }

    /**
     * @param string $urlProd
     */
    public function setUrlProd($urlProd)
    {
        $this->urlProd = $urlProd;
    }

    /**
     * @return string
     */
    public function getUrlDev()
    {
        return $this->urlDev;
    }

    /**
     * @param string $urlDev
     */
    public function setUrlDev($urlDev)
    {
        $this->urlDev = $urlDev;
    }
}