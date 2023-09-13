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
 * Timestamp profile field behaves like the text one.
 *
 * @package   profilefield_timestamp
 * @copyright 2013 onwards Jordi Pujol {@link http://www.sre.urv.cat}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class profile_define_timestamp extends profile_define_base
{
    /**
     * Sets the hidden value for default value.
     * @param object $form
     */
    function define_form_specific($form)
    {
        $form->addElement('hidden', 'defaultdata', '0');
        $form->setType('defaultdata', PARAM_INT);
    }

    /**
     * Sets default value to 0.
     *
     * @param   object   $data data from the add/edit profile field form
     * @return  object   $data with defaultdata attribute set to zero
     */
    function define_save_preprocess($data)
    {
        $data->defaultdata = '0';
        return $data;
    }

}
