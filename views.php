<?php
    require_once 'Parsedown.php';

    // read_file
    // $text = readfile('index.php');
    function read_file($path) {
        $text = file_get_contents($path);
        $text = htmlspecialchars($text);
        return $text;
    }

    // render_page -- Create one HTML page from a template.
    function render_page($settings) {
        header("Pragma: no-cache");
        header("Expires: 0");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        return render_template("page.html", $settings);
    }

    // render_markdown -- Convert markdown text to HTML
    function render_markdown($markdown) {
        $Parsedown = new Parsedown();
        return $Parsedown->text($markdown);
    }


    // render_markdown_file -- Convert a file to HTML
    function render_markdown_file($path) {
        return render_markdown(read_file($path));
    }


    // render_template -- Convert template file using the settings
    function render_template($template, $settings) {
        $text = file_get_contents($template); 
        $text = transform_text($text, $settings);
        return $text;
    }


    // transform_text -- Convert each setting in a block of text
    function transform_text ($text, $settings) {
        foreach ($settings as $key => $value) {
            $text = str_replace("{{ $key }}",  $value,  $text);
        }
        return $text;
    }


?>
