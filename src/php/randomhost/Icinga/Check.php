<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Check interface definition
 *
 * PHP version 5
 *
 * @category  Monitoring
 * @package   PHP_Icinga
 * @author    Ch'Ih-Yu <chi-yu@web.de>
 * @copyright 2014 random-host.com
 * @license   http://www.debian.org/misc/bsd.license BSD License (3 Clause)
 * @link      https://pear.random-host.com/
 */
namespace randomhost\Icinga;

/**
 * Interface definition for Icinga plugins
 *
 * @category  Monitoring
 * @package   PHP_Icinga
 * @author    Ch'Ih-Yu <chi-yu@web.de>
 * @copyright 2014 random-host.com
 * @license   http://www.debian.org/misc/bsd.license  BSD License (3 Clause)
 * @version   Release: @package_version@
 * @link      https://pear.random-host.com/
 */
interface Check
{
    /**
     * Icinga return code for service state "OK".
     *
     * @var int
     */
    const SERVICE_STATE_OK = 0;

    /**
     * Icinga return code for service state "WARNING".
     *
     * @var int
     */
    const SERVICE_STATE_WARNING = 1;

    /**
     * Icinga return code for service state "CRITICAL".
     *
     * @var int
     */
    const SERVICE_STATE_CRITICAL = 2;

    /**
     * Icinga return code for service state "UNKNOWN".
     *
     * @var int
     */
    const SERVICE_STATE_UNKNOWN = 3;

    /**
     * Performs the Icinga check.
     * 
     * @return void
     */
    public function run();
} 