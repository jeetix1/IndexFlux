<!DOCTYPE html>
<html>

<head>
  <title>Index Flux - All Tools</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.1x.no/remixicon/4.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/scrollbar.css">
</head>

<body>
  <div class="fixed-top-bar-container">
    <div class="top-bar-wrapper">
      <div class="top-bar">

        <!-- MENU GROUP -->
        <div class="top-bar-group">
          <div class="dropdown">
            <button class="dropbtn">
              <img src="https://cdn.1x.no/remixicon/4.5.0/icons/System/menu-fill.svg" alt="Menu" width="24" height="24" style="filter: invert(1);">
            </button>
            <div class="dropdown-content">
              <!-- <hr style="border: none; border-top: 1px solid var(--text-color); margin: 5px 0;"> -->
              <a href="./">Home</a>
              <a href="./dashboard">Dashboard</a>
              <a href="./settings">Settings</a>
              <a href="./help">Help</a>
            </div>
          </div>
        </div>

        <!-- SEARCH GROUP -->
        <div class="top-bar-group">
          <div class="search-bar">
            <i class="ri-search-line" style="font-size: 24px; color: var(--text-color);"></i>
            <input type="text" id="mainsearch" placeholder="Search tools...">
          </div>
        </div>

        <!-- TOGGLES GROUP -->
        <div class="top-bar-group">
          <div class="toggle-width-btn">
            <i class="ri-fullscreen-line" style="font-size: 24px; color: var(--text-color);"></i>
          </div>
          <div class="toggle-mode-btn">
            <i class="ri-moon-line" style="font-size: 24px; color: var(--text-color);"></i>
          </div>
          <div class="toggle-pin-btn">
            <i class="ri-pushpin-line" style="font-size: 24px; color: var(--text-color);"></i>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <h1>Tools</h1>

    <div class="category-filter">
      <button class="category-btn active" data-category="all">All</button>
      <button class="category-btn" data-category="code">Code</button>
      <button class="category-btn" data-category="design">Design</button>
      <button class="category-btn" data-category="productivity">Productivity</button>
      <button class="remove-tool-btn" style="margin-left: auto; background-color: var(--error-color); color: var(--bg-color); border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">Remove Tool</button>
      <button class="create-tool-btn" style="margin-left: 10px; background-color: var(--success-color); color: var(--bg-color); border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">Create New Tool</button>
      <button class="cmd-terminal-btn" style="margin-left: 10px; background-color: var(--primary-color); color: var(--bg-color); border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">CMD Terminal</button>
    </div>
    <div class="tool-grid">

      <div class="tool-card" data-categories="design" onclick="location.href='./category/emoji-lookup'">
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

      <div class="tool-card" data-categories="code" onclick="location.href='./category/toolname'">
        <div class="tool-icon">🏷️</div>
        <div class="tool-name">Tool Name</div>
        <div class="tool-description">Short description of the tool's functionality, ideally not much more than one sentence.</div>
        <div class="tool-tags">
          <span class="tool-tag">HTML</span>
          <span class="tool-tag">CSS</span>
        </div>
      </div>

      <?php
      for ($i = 0; $i < 40; $i++) {
        include './assets/placeholdertool.php';
      }
      ?>

    </div>
  </div>

  <script>
    window.addEventListener('load', function() {
      // Set default modes on load
      const savedTheme = localStorage.getItem('theme');
      const savedScreenMode = localStorage.getItem('screenMode');
      const savedNavbarPinned = localStorage.getItem('navbarPinned');

      // Apply theme preference
      document.body.classList.toggle('light-mode', savedTheme === 'light');
      updateThemeIcon();

      // Apply screen mode preference
      document.body.classList.toggle('widescreen-mode', savedScreenMode === 'widescreen');
      updateScreenModeIcon();

      // Apply navbar pin state, defaulting to "pinned" if no preference is set
      if (savedNavbarPinned === 'false') {
        document.body.classList.add('navbar-unpinned');
      } else {
        document.body.classList.add('navbar-pinned');
      }
      updatePinIcon();
    });

    // Toggle light/dark mode
    document.querySelector('.toggle-mode-btn').addEventListener('click', function() {
      document.body.classList.toggle('light-mode');
      localStorage.setItem('theme', document.body.classList.contains('light-mode') ? 'light' : 'dark');
      updateThemeIcon();
    });

    // Toggle widescreen/contained mode
    document.querySelector('.toggle-width-btn').addEventListener('click', function() {
      document.body.classList.toggle('widescreen-mode');
      localStorage.setItem('screenMode', document.body.classList.contains('widescreen-mode') ? 'widescreen' : 'contained');
      updateScreenModeIcon();
    });

    // Toggle pin/unpin for navbar
    document.querySelector('.toggle-pin-btn').addEventListener('click', function() {
      document.body.classList.toggle('navbar-pinned');
      document.body.classList.toggle('navbar-unpinned');
      localStorage.setItem('navbarPinned', document.body.classList.contains('navbar-pinned') ? 'true' : 'false');
      updatePinIcon();
    });

    // Update theme icon based on current mode
    function updateThemeIcon() {
      const themeIcon = document.querySelector('.toggle-mode-btn i');
      themeIcon.className = document.body.classList.contains('light-mode') ? 'ri-sun-line' : 'ri-moon-line';
    }

    // Update screen mode icon based on current mode
    function updateScreenModeIcon() {
      const screenIcon = document.querySelector('.toggle-width-btn i');
      screenIcon.className = document.body.classList.contains('widescreen-mode') ? 'ri-fullscreen-line' : 'ri-fullscreen-exit-line';
    }

    // Update pin icon based on current mode
    function updatePinIcon() {
      const pinIcon = document.querySelector('.toggle-pin-btn i');
      pinIcon.className = document.body.classList.contains('navbar-pinned') ? 'ri-pushpin-line' : 'ri-unpin-line';
    }

    // Hover effects to show opposite icon
    document.querySelector('.toggle-pin-btn').addEventListener('mouseover', function() {
      const pinIcon = document.querySelector('.toggle-pin-btn i');
      pinIcon.className = document.body.classList.contains('navbar-pinned') ? 'ri-unpin-line' : 'ri-pushpin-line';
    });
    document.querySelector('.toggle-pin-btn').addEventListener('mouseout', updatePinIcon);

    document.querySelector('.toggle-mode-btn').addEventListener('mouseover', function() {
      const themeIcon = document.querySelector('.toggle-mode-btn i');
      themeIcon.className = document.body.classList.contains('light-mode') ? 'ri-moon-line' : 'ri-sun-line';
    });
    document.querySelector('.toggle-mode-btn').addEventListener('mouseout', updateThemeIcon);

    document.querySelector('.toggle-width-btn').addEventListener('mouseover', function() {
      const screenIcon = document.querySelector('.toggle-width-btn i');
      screenIcon.className = document.body.classList.contains('widescreen-mode') ? 'ri-fullscreen-exit-line' : 'ri-fullscreen-line';
    });
    document.querySelector('.toggle-width-btn').addEventListener('mouseout', updateScreenModeIcon);

    // Filter tools based on search input and category selection
    function filterTools(searchTerm = '', category = 'all') {
      document.querySelectorAll('.tool-card').forEach(card => {
        const toolName = card.querySelector('.tool-name').textContent.toLowerCase();
        const toolDescription = card.querySelector('.tool-description').textContent.toLowerCase();
        const toolCategories = card.dataset.categories.split(',');

        const matchesSearch = toolName.includes(searchTerm) || toolDescription.includes(searchTerm);
        const matchesCategory = category === 'all' || toolCategories.includes(category);

        card.style.display = matchesSearch && matchesCategory ? 'block' : 'none';
      });
    }

    // Search functionality
    document.querySelector('.search-bar input').addEventListener('input', function(e) {
      const searchTerm = e.target.value.toLowerCase();
      filterTools(searchTerm);
    });

    // Category filter functionality
    document.querySelectorAll('.category-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const category = this.dataset.category;
        filterTools('', category);
      });
    });
  </script>

</body>

</html>