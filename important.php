<?php
session_start();
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Today - To Do</title>
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
      <?php include 'template.php'; ?>
      <div class="right-side">
        <div class="main-today">
          <div class="header">
            <div class="column column1">
              <div class="item item1">
                <span class="material-icons-outlined menu-icon my-day-icon">brightness_7</span>
                <span class="my-day">Important</span>
                <br />
                <span class="day-detail">ថ្ងៃសុក្រ, ១ មិនា ២១</span>
              </div>
              <div class="item">
                <span class="material-icons-outlined">grid_view</span>
                <span>Grid</span>
              </div>
              <div class="item">
                <span class="material-icons-outlined">menu</span>
                <span>List</span>
              </div>
            </div>
            <div class="column column2">
              <div class="item">
                <span class="material-icons-outlined">sort</span>
                <span>Sort</span>
              </div>
              <div class="item">
                <span class="material-icons-outlined">check_box_outline_blank</span>
                <span>Group</span>
              </div>
              <div class="item">
                <span class="material-icons-outlined">lightbulb</span>
                <span>Recomment</span>
              </div>
            </div>
          </div>
          <div class="add-container">
            <div class="box top input-container">
              <input type="radio" class="circle" disabled />
              <input type="text" class="text-input" placeholder="Add Task" disabled />
            </div>
            <div class="box bottom">
              <div class="icon-container">
                <span class="material-icons-outlined">calendar_month</span>
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">sync</span>
              </div>
              <button class="add-btn" disabled>Add</button>
            </div>
          </div>

          <div class="data">
              <ul class="ul">
                  <?php foreach ($tasks["Important"] as $task): ?>
                      <li class="item">
                          <input type="radio" class="circle" disabled />
                          <span class="title"><?php echo htmlspecialchars($task); ?></span>
                          <span class="delete-btn">Delete</span>
                      </li>
                  <?php endforeach; ?>
              </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>