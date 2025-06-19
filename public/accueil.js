const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const overlay = document.getElementById('overlay');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('show');
      overlay.style.display = sidebar.classList.contains('show') ? 'block' : 'none';
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('show');
      overlay.style.display = 'none';
    });