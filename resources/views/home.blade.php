@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<!-- Section Dashboard -->
<div class="container">
    <div class="row">
      <div id="dashboard" class="section">
        <h5>Statistiques des ventes</h5>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
              <div class="card-body">
                <h6 class="card-title">Ventes ce mois</h6>
                <p class="card-text">120 000 Ar</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
              <div class="card-body">
                <h6 class="card-title">Ventes cette semaine</h6>
                <p class="card-text">45 000 Ar</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card text-white bg-info">
              <div class="card-body">
                <h6 class="card-title">Nombre total de ventes</h6>
                <p class="card-text">32</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
               <canvas id="salesChart" height="100"></canvas> 
           </div>
        </div>
        
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Semaine 1', 'Semaine 2', 'Semaine 3', 'Semaine 4'],
                datasets: [{
                    label: 'Ventes (Ar)',
                    data: [25000, 32000, 28000, 40000],
                    backgroundColor: '#198754'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
@endsection