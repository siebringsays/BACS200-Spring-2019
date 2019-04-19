<?php

    // View rendering code
    require_once 'views.php'; 
    
    
    // Page content
    $lesson = $_GET['lesson'];
    $content = render_markdown_file("Lessons/$lesson.md");

    
    // Create main part of page content
    $settings = array(
        "site_title" => '<a href="index.php">UNC BACS 200 Lessons</a>',
        "page_title" => "Lesson #$lesson", 
        "content"    => $content);

    echo render_page($settings);

?>
