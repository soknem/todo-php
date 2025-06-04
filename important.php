<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Important - To Do</title>
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
                <span class="material-icons-outlined menu-icon my-day-icon">star_border</span>
                <span class="my-day">សំខាន់</span>
                <br />
                <span class="day-detail">ថ្ងៃសុក្រ, ១ មិនា ២១</span>
              </div>
              <div class="item">
                <span class="material-icons-outlined">grid_view</span>
                <span>ក្រឡា</span>
              </div>
              <div class="item">
                <span class="material-icons-outlined">menu</span>
                <span>បញ្ជី</span>
              </div>
            </div>
            <div class="column column2">
              <div class="item">
                <span class="material-icons-outlined">sort</span>
                <span>តម្រៀប</span>
              </div>
              <div class="item">
                <span class="material-icons-outlined">check_box_outline_blank</span>
                <span>ក្រុម</span>
              </div>
              <div class="item">
                <span class="material-icons-outlined">lightbulb</span>
                <span>កាណែនាំ</span>
              </div>
            </div>
          </div>
          <div class="add-container">
            <div class="box top input-container">
              <input type="radio" class="circle" disabled />
              <input type="text" class="text-input" placeholder="បន្ថែមការងារមួយ" disabled />
            </div>
            <div class="box bottom">
              <div class="icon-container">
                <span class="material-icons-outlined">calendar_month</span>
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">sync</span>
              </div>
              <button class="add-btn" disabled>បន្ថែម</button>
            </div>
          </div>
          <div class="data">
            <ul class="ul">
              <li class="item">
                <input type="radio" class="circle" disabled />
                <span class="title">Sample Important Task 1</span>
                <span class="delete-btn">Delete</span>
              </li>
              <li class="item">
                <input type="radio" class="circle" disabled />
                <span class="title">Sample Important Task 2</span>
                <span class="delete-btn">Delete</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>