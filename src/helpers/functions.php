<?php
// This file contains helper functions that can be used throughout the project to perform common tasks.

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function redirectTo($url) {
    header("Location: $url");
    exit();
}

function formatDate($date) {
    return date("F j, Y", strtotime($date));
}

function isActive($currentPage, $page) {
    return $currentPage === $page ? 'active' : '';
}
?>