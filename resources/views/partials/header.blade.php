<div class="content-wrapper">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <h4 class="text-center text-white fw-bold">🔥 Dashboard</h4>
      <a href="dashboard.html"><i class="bi bi-speedometer2 me-2"></i> Accueil</a>
      <a href="dashboard2.html"><i class="bi bi-person me-2"></i> Profil</a>
      <a href="#"><i class="bi bi-bar-chart-line me-2"></i> Stats</a>
      <a href="#"><i class="bi bi-gear me-2"></i> Paramètres</a>
      <a href="#"><i class="bi bi-box-arrow-right me-2"></i> Quitter</a>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="d-md-none"></div>

    <!-- Header -->
    <header>
      <div class="header-left">
        <button class="btn btn-link d-md-none p-0" id="toggleSidebar" aria-label="Toggle Sidebar">
          <i class="bi bi-list fs-2"></i>
        </button>
        <h1 class="dashboard-title">Tableau de Bord</h1>
        <form class="search-form" role="search" aria-label="Recherche">
          <input type="search" placeholder="Rechercher..." />
          <button type="submit" aria-label="Lancer la recherche">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>

      <div class="header-right">
        <button class="notification-btn" aria-label="Notifications">
          <i class="bi bi-bell"></i>
          <span class="notification-badge"></span>
        </button>

        <div class="avatar-wrapper" tabindex="0" aria-label="Profil utilisateur">
          <img src="https://i.pravatar.cc/40" alt="Avatar" class="avatar rounded-circle" />
          <span class="avatar-status bg-success"></span>
        </div>
      </div>
    </header>