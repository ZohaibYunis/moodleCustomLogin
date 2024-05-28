<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_mycustomlogin', get_string('pluginname', 'local_mycustomlogin'));
    $ADMIN->add('localplugins', $settings);
}
