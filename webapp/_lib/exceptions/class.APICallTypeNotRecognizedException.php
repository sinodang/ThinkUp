<?php
/**
 *
 * ThinkUp/webapp/_lib/model/exceptions/class.APICallTypeNotRecognizedEception.php
 *
 * Copyright (c) 2009-2016 Sam Rose
 *
 * LICENSE:
 *
 * This file is part of ThinkUp (http://thinkup.com).
 *
 * ThinkUp is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any
 * later version.
 *
 * ThinkUp is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with ThinkUp.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 *
 *
 * @author Sam Rose <samwho@lbak.co.uk>
 * @license http://www.gnu.org/licenses/gpl.html
 * @copyright 2009-2016 Sam Rose
 */
class APICallTypeNotRecognizedException extends Exception {
    public function __construct($type) {
        parent::__construct('Your API call type "' . $type . '" was not recognized.');
    }
}
