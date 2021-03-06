<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PWAK (PHP Web Application Kit) framework.
 *
 * PWAK is a php framework initially developed for the
 * {@link http://onlogistics.googlecode.com Onlogistics} ERP/Supply Chain
 * management web application.
 * It provides components and tools for developers to build complex web
 * applications faster and in a more reliable way.
 *
 * PHP version 5.1.0+
 * 
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @package   PWAK
 * @author    ATEOR dev team <dev@ateor.com>
 * @copyright 2003-2008 ATEOR <contact@ateor.com> 
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   SVN: $Id$
 * @link      http://pwak.googlecode.com
 * @since     File available since release 0.1.0
 * @filesource
 */

class TimetableActionWeek extends TimetableAction {
    public function __construct($timetable, $params) {
        parent::__construct($params);
        if(isset($params['url'])) {
            $this->url = $params['url'];
        } else {
            $this->url = $_SERVER['PHP_SELF'];
        }
        $this->url .= sprintf('?f=Weekly&y=%d&m=%d&d=%d', $timetable->year, $timetable->month, $timetable->day);
        if(isset($params['uri'])) {
            $this->url .= '&' . $params['uri']; 
        }
    }
}

?>
