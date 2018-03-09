@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="row">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Time Sheets</h4>
                        <p class="card-text">Fill in the time for projects.</p>
                        <a href="{{ url ('/time') }}" class="btn btn-primary">Fill</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Vacation</h4>
                        <p class="card-text">Apply for Leave days.</p>
                        <a href="{{ url ('/leave') }}" class="btn btn-primary">Apply</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Logistics</h4>
                        <p class="card-text">Apply for transportation.</p>
                        <a href="{{ url ('/logistics') }}" class="btn btn-primary">Apply</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Overtime</h4>
                        <p class="card-text">Apply for Overtime on projecs.</p>
                        <a href="{{ url ('/over') }}" class="btn btn-primary">Apply</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

        </div>
          <hr>
          </div>
    
</div>
@endsection
