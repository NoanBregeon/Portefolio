<?php
class PageController {
    public static function render($page) {
        include "views/$page.php"; // Inclut uniquement la vue
    }
}
?>