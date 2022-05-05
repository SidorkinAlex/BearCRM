<?php
if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_save']) || !is_array($hook_array['after_save'])) {
    $hook_array['after_save'] = array();
}
$hook_array['after_save'][] = Array(99, 'AOW_Workflow', 'modules/AOW_WorkFlow/AOW_WorkFlow.php','AOW_WorkFlow', 'run_bean_flows');

if (!isset($hook_array['after_ui_footer']) || !is_array($hook_array['after_ui_footer'])) {
    $hook_array['after_ui_footer'] = array();
}
$hook_array['after_ui_footer'][] = array(
    100,
    'adding js file to page',
    'modules/BOARD/hooks/js_add_hook.php',
    'Js_Add_Hook',
    'after_ui_frame_method');