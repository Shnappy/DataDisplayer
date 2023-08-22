<?php
namespace Views;

class ListView {
    public static function displayIncidents($incidents) {
        echo '<ul>';
        foreach ($incidents as $incident) {
            echo '<li>' . $incident['title'] . '</li>';
        }
        echo '</ul>';
    }
}
?>