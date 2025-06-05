<?php
$tasks = array(
    "My Day" => array(
        "Sleeping",
        "Eating",
        "Playing Game",
        "Important"
    ),
    "Important" => array(
        "Submit Project Report",
        "Attend Team Meeting",
        "Review Feedback"
    ),
    "Planned" => array(
        "Plan Weekly Schedule",
        "Book Travel Tickets",
        "Prepare Presentation"
    ),
    "Assigned to Me" => array(
        "Update Website Content",
        "Fix Bug in Code",
        "Test New Feature"
    ),
    "Work" => array(
        "Complete Project Proposal",
        "Email Client",
        "Organize Team Tasks"
    )
);

// Icon and page mappings for sidebar
$icon_map = array(
    "My Day" => "brightness_7",
    "Important" => "star_border",
    "Planned" => "calendar_today",
    "Assigned to Me" => "person_outline",
    "Work" => "home"
);
$page_map = array(
    "My Day" => "today.php",
    "Important" => "important.php",
    "Planned" => "planned.php",
    "Assigned to Me" => "assigned.php",
    "Work" => "work.php"
);
?>