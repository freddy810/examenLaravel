@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Main content -->
    <div class="main-content">
      <div class="container-fluid">
        <h2 class="fw-bold mb-4 fade-in-up">Bienvenue Sur la page d'accueil 👋</h2>

        <!-- Stat cards améliorées -->
        <div class="row g-4 fade-in-up">
          <div class="col-md-4">
            <div class="card card-glass p-4 position-relative overflow-hidden" style="color:#5e50f9;">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                  <h6 class="text-uppercase text-muted mb-1">Utilisateurs</h6>
                  <h3 class="fw-bold">1,240</h3>
                </div>
                <i class="bi bi-people-fill stat-icon"></i>
              </div>
              <p class="mb-3 text-secondary">+5.2% ce mois-ci par rapport au précédent</p>
              <div class="progress rounded-pill">
                <div class="progress-bar" role="progressbar" style="width: 75%; background: #5e50f9;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="small text-muted mt-2 d-block">Objectif annuel: 15,000 utilisateurs</span>

              <div class="icon-bg" style="color:#5e50f9;">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-glass p-4 position-relative overflow-hidden" style="color:#28a745;">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                  <h6 class="text-uppercase text-muted mb-1">Revenus</h6>
                  <h3 class="fw-bold">€24,560</h3>
                </div>
                <i class="bi bi-currency-euro stat-icon revenue"></i>
              </div>
              <p class="mb-3 text-secondary">+3.9% ce trimestre</p>
              <div class="progress rounded-pill">
                <div class="progress-bar bg-success" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="small text-muted mt-2 d-block">Objectif annuel: €100,000</span>

              <div class="icon-bg" style="color:#28a745;">
                <i class="bi bi-currency-euro"></i>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-glass p-4 position-relative overflow-hidden" style="color:#fd7e14;">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                  <h6 class="text-uppercase text-muted mb-1">Commandes</h6>
                  <h3 class="fw-bold">320</h3>
                </div>
                <i class="bi bi-basket-fill stat-icon orders"></i>
              </div>
              <p class="mb-3 text-secondary">+7.4% ce mois-ci</p>
              <div class="progress rounded-pill">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="small text-muted mt-2 d-block">Objectif annuel: 4,000 commandes</span>

              <div class="icon-bg" style="color:#fd7e14;">
                <i class="bi bi-basket-fill"></i>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
@endsection
