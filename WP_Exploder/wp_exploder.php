<?php
/**
 * Plugin Name: WP Exploder – Fatal Error Training Plugin
 * Description: Oktatási célra készült hibás WordPress plugin, aktiváláskor azonnali Fatal Error-t okoz.
 * Version: 1.0
 * Author: Radics Péter /mrkocka
 */

// Direkt PHP hiba — nem létező függvény meghívása

add_action( 'init', 'hack_the_system' );

function hack_the_system() {
    fuck_wp();
}