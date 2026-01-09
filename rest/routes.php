<?php
/**
 * REST API routes for Lean Stats.
 */

defined('ABSPATH') || exit;

require_once LEAN_STATS_PATH . 'includes/rest/class-lean-stats-hit-controller.php';

add_action('rest_api_init', static function (): void {
    $controller = new Lean_Stats_Hit_Controller();
    $controller->register_routes();
});
