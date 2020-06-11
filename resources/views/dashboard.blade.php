  @extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <h1 class="display-3">Biblioteca de Filme</h1>
      <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('material') }}/img/banner.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush