<?php

namespace NetSuite\WebServices;

class RevRecTemplate extends Record
{
    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var RevRecScheduleAmortizationType
     */
    public $amortizationType;

    /**
     * @access public
     * @var RevRecScheduleRecurrenceType
     */
    public $recurrenceType;

    /**
     * @access public
     * @var RevRecScheduleRecogIntervalSrc
     */
    public $recogIntervalSrc;

    /**
     * @access public
     * @var integer
     */
    public $amortizationPeriod;

    /**
     * @access public
     * @var integer
     */
    public $periodOffset;

    /**
     * @access public
     * @var integer
     */
    public $revRecOffset;

    /**
     * @access public
     * @var float
     */
    public $initialAmount;

    /**
     * @access public
     * @var boolean
     */
    public $isInactive;

    /**
     * @access public
     * @var RevRecTemplateRecurrenceList
     */
    public $recurrenceList;

    /**
     * @access public
     * @var string
     */
    public $internalId;

    /**
     * @access public
     * @var string
     */
    public $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "amortizationType" => "RevRecScheduleAmortizationType",
        "recurrenceType" => "RevRecScheduleRecurrenceType",
        "recogIntervalSrc" => "RevRecScheduleRecogIntervalSrc",
        "amortizationPeriod" => "integer",
        "periodOffset" => "integer",
        "revRecOffset" => "integer",
        "initialAmount" => "float",
        "isInactive" => "boolean",
        "recurrenceList" => "RevRecTemplateRecurrenceList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
