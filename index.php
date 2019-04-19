<?php

    // View rendering code
    require_once 'views.php'; 
    
    
    // Page content
    $content =  '
        <h2>Lesson Selector </h2>
        <ul>
            <li><a href="lesson.php?lesson=01">Lesson 1</a></li>
            <li><a href="lesson.php?lesson=02">Lesson 2</a></li>
            <li><a href="lesson.php?lesson=03">Lesson 3</a></li>
            <li><a href="lesson.php?lesson=04">Lesson 4</a></li>
            <li><a href="lesson.php?lesson=05">Lesson 5</a></li>
            <li><a href="lesson.php?lesson=06">Lesson 6</a></li>
            <li><a href="lesson.php?lesson=07">Lesson 7</a></li>
            <li><a href="lesson.php?lesson=08">Lesson 8</a></li>
            <li><a href="lesson.php?lesson=09">Lesson 9</a></li>
            <li><a href="lesson.php?lesson=10">Lesson 10</a></li>
            <li><a href="lesson.php?lesson=11">Lesson 11</a></li>
            <li><a href="lesson.php?lesson=12">Lesson 12</a></li>
            <li><a href="lesson.php?lesson=13">Lesson 13</a></li>
            <li><a href="lesson.php?lesson=14">Lesson 14</a></li>
            <li><a href="lesson.php?lesson=15">Lesson 15</a></li>
            <li><a href="lesson.php?lesson=16">Lesson 16</a></li>
            <li><a href="lesson.php?lesson=17">Lesson 17</a></li>
            <li><a href="lesson.php?lesson=18">Lesson 18</a></li>
            <li><a href="lesson.php?lesson=19">Lesson 19</a></li>
            <li><a href="lesson.php?lesson=20">Lesson 20</a></li>
            <li><a href="lesson.php?lesson=21">Lesson 21</a></li>
            <li><a href="lesson.php?lesson=22">Lesson 22</a></li>
            <li><a href="lesson.php?lesson=23">Lesson 23</a></li>
            <li><a href="lesson.php?lesson=24">Lesson 24</a></li>
            <li><a href="lesson.php?lesson=25">Lesson 25</a></li>
            <li><a href="lesson.php?lesson=26">Lesson 26</a></li>
            <li><a href="lesson.php?lesson=27">Lesson 27</a></li>
            <li><a href="lesson.php?lesson=28">Lesson 28</a></li>
            <li><a href="lesson.php?lesson=29">Lesson 29</a></li>
            <li><a href="lesson.php?lesson=30">Lesson 30</a></li>
            <li><a href="lesson.php?lesson=31">Lesson 31</a></li>
            <li><a href="lesson.php?lesson=32">Lesson 32</a></li>
            <li><a href="lesson.php?lesson=33">Lesson 33</a></li>
            <li><a href="lesson.php?lesson=34">Lesson 34</a></li>
            <li><a href="lesson.php?lesson=35">Lesson 35</a></li>
            <li><a href="lesson.php?lesson=36">Lesson 36</a></li>
            <li><a href="lesson.php?lesson=37">Lesson 37</a></li>
            <li><a href="lesson.php?lesson=38">Lesson 38</a></li>
            <li><a href="lesson.php?lesson=39">Lesson 39</a></li>
        </ul>';

    
    // Create main part of page content
    $settings = array(
        "site_title" => '<a href="lesson.php">UNC BACS 200 Lessons</a>',
        "page_title" => "Lesson Index", 
        "content"    => $content);

    echo render_page($settings);

?>
