@extends('layouts.master')

@section('title')
@parent
:: Console
@stop

@section('content')
<div class='container'>
  <div class='page-header'>
    <h1>Orly Web UI<small> Click a dataset to explore</small>
      <span id='connection_status' class="label pull-right"></span>
    </h1>
    <ul id='datasets' class='nav nav-tabs' role='tablist'></ul>
    <div id='connection' class='fade in'></div>
  </div>
  <div id='query' class='panel hide'>
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <h3 class='panel-title'>
          <b>OrlyScript</b>
          {{ Form::button('Compile', array('class' => 'btn btn-default',
                                           'data-target' => 'modal',
                                           'data-toggle' => 'modal',
                                           'id' => 'compile')); }}
        </h3>
      </div>
      {{ Form::textarea('orlyscript', '', array('class' => 'form-control',
                                                'id' => 'orlyscript')); }}
    </div>
    <div class='row'>
      <div class='col-lg-4 col-md-4 col-sm-4'>
        <select id='function' class='form-control input-medium'></select>
      </div>
      <div class='col-lg-6 col-md-6 col-sm-6'>
        <table class='table' id='args'>
          <thead>
            <tr>
              <th>parameter</th>
              <th>argument</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class='col-lg-2 col-md-2 col-sm-2'>
        {{ Form::button('Run', array('class' => 'btn btn-default',
                                     'data-loading-text' => 'Running...',
                                     'id' => 'run')); }}
      </div>
    </div>
    <h2>Result:</h2>
    <div id="result"></div>
  </div>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h3 class='panel-title'><b>Log</b></h3>
    </div>
    {{ Form::textarea('log', '', array('disabled',
                                       'class' => 'form-control',
                                       'id' => 'log')); }}
  </div>
  <div class="modal fade bs-example-modal-sm" id="modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <h4 id="modal-message" class="text-center"></h4>
          <div class="progress progress-striped active">
            <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

