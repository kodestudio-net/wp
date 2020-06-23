<?php
if (is_active_sidebar('sidebar-1')) {
    echo '<aside class="sidebar col-md-3 h-100">';
    dynamic_sidebar('sidebar-1');
    echo '</aside>';
}