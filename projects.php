<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$projects = [
    [
        'title' => 'Project 1',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'image' => 'images/project1.jpg',
        'link' => 'http://localhost/carRantal/carrental/',
    ],
    // Add more projects as needed
];

foreach ($projects as $project) {
    echo "<div class='project'>
            <img src='{$project['image']}' alt='{$project['title']}'>
            <h2>{$project['title']}</h2>
            <p>{$project['description']}</p>
            <a href='{$project['link']}' target='_blank'>View Project</a>
          </div>";
}

?>




