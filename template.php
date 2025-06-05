<?php
// Ensure $tasks, $icon_map, and $page_map are available (data.php must be included before this)
if (!isset($tasks) || !isset($icon_map) || !isset($page_map)) {
    require_once 'data.php';
}
?>
<nav class="side-bar">
    <div class="top-menu">
        <ul>
                <?php foreach (array_keys($tasks) as $category): ?>
                    <li class="item<?php echo basename($_SERVER['PHP_SELF']) == $page_map[$category] ? ' active' : ''; ?>">
                        <a href="<?php echo htmlspecialchars($page_map[$category]); ?>">
                            <span class="material-icons-outlined menu-icon"><?php echo htmlspecialchars($icon_map[$category]); ?></span>
                            <span><?php echo htmlspecialchars($category); ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
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