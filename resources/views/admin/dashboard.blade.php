@extends('layout.admin')



@section('content')
<div class="page-inner">
    <div class="page-header">
        @guest
        <h4 class="page-title">Welcome, Please <a href="/register">Sign Up</a> / <a href="/login">Login</a> </h4>
        @endguest
        @auth
        <h4 class="page-title">Welcome, Back {{Auth:: user() -> name }} </h4>
        @endauth
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-dark bg-primary-gradient">
                <div class="card-body pb-0">
                    <div class="h1 fw-bold float-right">+37%</div>
                    <h2 class="mb-2">300</h2>
                    <p>Total Journal</p>
                    <div class="pull-in sparkline-fix chart-as-background">
                        <div id="lineChart"><canvas width="30" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-secondary-gradient">
                <div class="card-body pb-0">
                    <div class="h1 fw-bold float-right">+30</div>
                    <h2 class="mb-2">200</h2>
                    <p>Journal Bahasa Indonesia</p>
                    <div class="pull-in sparkline-fix chart-as-background">
                        <div id="lineChart2"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-success2">
                <div class="card-body pb-0">
                    <div class="h1 fw-bold float-right">+7</div>
                    <h2 class="mb-2">100</h2>
                    <p>Journal Bahasa Asing</p>
                    <div class="pull-in sparkline-fix chart-as-background">
                        <div id="lineChart3"><canvas width="327" height="70" style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection