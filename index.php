<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To Do</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  </head>
  <body>
    <nav class="nav">
      <div class="brand">
        <span class="material-icons-outlined">apps</span>
        <h4>To Do</h4>
      </div>
      <div class="search">
        <input type="text" placeholder="Search..." disabled />
        <span class="material-icons-outlined search-icon">search</span>
      </div>
      <ul class="option">
        <li><span class="material-icons-outlined">settings</span></li>
        <li><span class="material-icons-outlined">notifications</span></li>
        <li><span class="material-icons-outlined">help_outline</span></li>
        <li><span class="material-icons-outlined">account_circle</span></li>
      </ul>
    </nav>
    <div class="main">
      <nav class="side-bar">
        <div class="top-menu">
          <ul>
            <li class="item<?php echo basename($_SERVER['PHP_SELF']) == 'today.php' ? ' active' : ''; ?>">
              <a href="today.php">
                <span class="material-icons-outlined menu-icon">brightness_7</span>
                <span>ថ្ងៃរបស់ខ្ញុំ</span>
              </a>
            </li>
            <li class="item<?php echo basename($_SERVER['PHP_SELF']) == 'important.php' ? ' active' : ''; ?>">
              <a href="important.php">
                <span class="material-icons-outlined menu-icon">star_border</span>
                <span>សំខាន់</span>
              </a>
            </li>
            <li class="item<?php echo basename($_SERVER['PHP_SELF']) == 'planned.php' ? ' active' : ''; ?>">
              <a href="planned.php">
                <span class="material-icons-outlined menu-icon">calendar_today</span>
                <span>បានរៀបចំផែនការ</span>
              </a>
            </li>
            <li class="item<?php echo basename($_SERVER['PHP_SELF']) == 'assigned.php' ? ' active' : ''; ?>">
              <a href="assigned.php">
                <span class="material-icons-outlined menu-icon">person_outline</span>
                <span>បានកំណត់ឱ្យខ្ញុំ</span>
              </a>
            </li>
            <li class="item<?php echo basename($_SERVER['PHP_SELF']) == 'work.php' ? ' active' : ''; ?>">
              <a href="work.php">
                <span class="material-icons-outlined menu-icon">home</span>
                <span>ការងារ</span>
              </a>
            </li>
          </ul>
        </div>
        <ul class="bottom-menu">
          <li class="item"><span class="material-icons-outlined">mail_outline</span></li>
          <li class="item"><span class="material-icons-outlined">calendar_today</span></li>
          <li class="item"><span class="material-icons-outlined">group</span></li>
          <li class="item"><span class="material-icons-outlined">edit</span></li>
          <li class="item"><span class="material-icons-outlined">check_circle_outline</span></li>
        </ul>
      </nav>
      <div class="right-side">
        <div class="main-today">
          <div class="header">
            <div class="column column1">
              <div class="item item1">
                <span class="material-icons-outlined menu-icon">apps</span>
                <span class="my-day">Welcome to To Do</span>
                <br />
                <span class="day-detail">Select a menu item to view tasks</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>