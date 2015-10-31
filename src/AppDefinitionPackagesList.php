<?php

namespace NetSuite\WebServices;

class AppDefinitionPackagesList
{
    /**
     * @access public
     * @var AppDefinitionPackages[]
     */
    public $packages;

    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    static $paramtypesmap = array(
        "packages" => "AppDefinitionPackages[]",
        "replaceAll" => "boolean",
    );
}
