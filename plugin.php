<?php
/*
Plugin Name: Kinetic Energy Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/kinetic-energy-calculator/
Description: Kinetic energy calculator easily finds kinetic energy, mass or velocity with the kinetic energy formula KE = 1/2 mv². Easy to use KE calculator.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_kinetic_energy_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Kinetic Energy Calculator by Calculator.iO";

function display_ci_kinetic_energy_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Kinetic Energy Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_kinetic_energy_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_kinetic_energy_calculator', 'display_ci_kinetic_energy_calculator' );