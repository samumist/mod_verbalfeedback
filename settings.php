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
 * Plugin administration pages are defined here.
 *
 * @package     mod_verbalfeedback
 * @copyright   2020 Kevin Tippenhauer <kevin.tippenhauer@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $name = 'mod_verbalfeedback/reportimage';
    $title = get_string('reportimage', 'mod_verbalfeedback', null, true);
    $description = get_string('reportimage_desc', 'mod_verbalfeedback', null, true);
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'reportbackgroundimage', 0,
        ['maxfiles' => 1, 'accepted_types' => ['.jpg', '.png']]);
    $settings->add($setting);
}
