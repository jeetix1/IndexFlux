<div class="tool-card" data-categories="productivity" onclick="location.href='./category/todolist'">
    <div class="tool-icon">📝</div>
    <div class="tool-name">Todo List</div>
    <div class="tool-description">A simple todo list application to organize your tasks, keep track of time and progress.</div>
    <div class="tool-tags">
        <span class="tool-tag">Productivity</span>
        <span class="tool-tag">HTML</span>
        <span class="tool-tag">CSS</span>
        <span class="tool-tag">php</span>
    </div>
</div>

<div class="tool-card" data-categories="productivity,design" onclick="location.href='./category/emoji-lookup'">
    <div class="tool-icon">
        <span class="tool-icon" style="position: absolute;">🔍</span>
        <span class="tool-icon" style="position: relative;opacity: 0.8; top: -11px; left: 10px; font-size: 24px;">🙂</span>
    </div>
    <div class="tool-name">Emoji Lookup</div>
    <div class="tool-description">Search and copy emojis for use in your web projects and applications.</div>
    <div class="tool-tags">
        <span class="tool-tag">Design</span>
        <span class="tool-tag">HTML</span>
        <span class="tool-tag">CSS</span>
    </div>
</div>

<div class="tool-card" data-categories="productivity" onclick="location.href='./category/bookmarks'">
    <div class="tool-icon">🔖</div> <!-- 📑⭐🔖 -->
    <div class="tool-name">Bookmarks</div>
    <div class="tool-description">Short description of the tool's functionality, ideally not much more than one sentence.</div>
    <div class="tool-tags">
        <span class="tool-tag">Productivity</span>
    </div>
</div>

<div class="tool-card" data-categories="bookmarks,entertainment,video" onclick="location.href='./category/toolname'">
    <div class="tool-icon">
        <img src="./assets/div/YouTube-Logo.png" alt="YouTube" height="72px" width="245px" style="background: white;">
</div>
    <div class="tool-name">YouTube</div>
    <div class="tool-description">Short description of the tool's functionality, ideally not much more than one sentence.</div>
    <div class="tool-tags">
        <span class="tool-tag">Bookmarks</span>
        <span class="tool-tag">Entertainment</span>
        <span class="tool-tag">Video</span>
    </div>
</div>

<div class="tool-card" data-categories="bookmarks,entertainment,music" onclick="location.href='./category/toolname'">
    <div class="tool-icon">🏷️</div>
    <div class="tool-name">YouTube Music</div>
    <div class="tool-description">Short description of the tool's functionality, ideally not much more than one sentence.</div>
    <div class="tool-tags">
        <span class="tool-tag">Bookmarks</span>
        <span class="tool-tag">Entertainment</span>
        <span class="tool-tag">Music</span>
    </div>
</div>

<div class="tool-card" data-categories="code" onclick="location.href='./category/toolname'">
    <div class="tool-icon">🏷️</div>
    <div class="tool-name">Tool Name</div>
    <div class="tool-description">Short description of the tool's functionality, ideally not much more than one sentence.</div>
    <div class="tool-tags">
        <span class="tool-tag">HTML</span>
        <span class="tool-tag">CSS</span>
    </div>
</div>

<?php // Repeats sample tool-card 40 times
for ($i = 0; $i < 40; $i++) {
    include './assets/code/tool-card-sample.php';
}
?>
