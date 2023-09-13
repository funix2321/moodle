<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Timestamp profile field behaves like the text one, except the value
 * is presented as a date and the integer value.
 *
 * @package   profilefield_timestamp
 * @copyright 2013 onwards Jordi Pujol {@link http://www.sre.urv.cat}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class profile_field_timestamp extends profile_field_base {

    /**
     * Gets the string representation of the value in the from:
     *
     * {human readable date} ({unix time stamp}).
     *
     * @return string
     */
    function display_data()
    {
        return ((is_number($this->data) && $this->data != 0)?
                userdate(
                    $this->data,
                    get_string('strftimedaydatetime', 'langconfig')):
                get_string('notset', 'profilefield_timestamp')) .
                ' ('.parent::display_data() .')';
    }

    /**
     * Build form field for this profile field.
     * @param object $mform form.
     */
    function edit_field_add($mform)
    {
        // Check if the field is required
        if ($this->field->required) {
            $optional = false;
        } else {
            $optional = true;
        }

        /// Create the form field
        $currentyear = date('Y');
        $attributes = array(
            'startyear' => $currentyear-100,
            'stopyear'  => $currentyear+20,
            'optional'  => $optional,
        );
        $mform->addElement('date_time_selector', $this->inputname, format_string($this->field->name), $attributes);
        $mform->setType($this->inputname, PARAM_INT);
        $mform->setDefault($this->inputname, time());
    }

}
