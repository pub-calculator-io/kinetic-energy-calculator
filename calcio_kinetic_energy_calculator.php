<?php
/*
Plugin Name: Kinetic Energy Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/kinetic-energy-calculator/
Description: Instantly calculate kinetic energy, mass, or velocity using the KE = 1/2 mv² formula. Fast, free, and accurate Kinetic Energy Calculator for physics problems.
Version: 1.0.0
Author: www.calculator.io / Kinetic Energy Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_kinetic_energy_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Kinetic Energy Calculator by www.calculator.io";

function calcio_kinetic_energy_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Kinetic Energy Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_kinetic_energy_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_kinetic_energy_calculator', 'calcio_kinetic_energy_calculator_shortcode' );