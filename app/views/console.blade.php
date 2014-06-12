@extends('layouts.master')

@section('title')
@parent
:: Console
@stop

@section('content')
<div class='container'>
  <div class='page-header'>
    <h1>Sample Datasets <small>Click to load and play</small></h1>
    <div class='btn-group' data-toggle='buttons'>
      <label id='matrix' class='btn btn-default dataset'>
        <input type='radio'> The Matrix
      </label>
      <label id='twitter' class='btn btn-default dataset'>
        <input type='radio'> Twitter
      </label>
    </div>
  </div>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h3 class='panel-title'><b>OrlyScript</b></h3>
    </div>
    {{ Form::textarea('orlyscript', '', array('disabled',
                                              'class' => 'form-control',
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
                                   'id' => 'run')); }}
    </div>
  </div>
  <table class='table' id='table'></table>
  <div id='graph'></div>
  <div id='legend'></div>
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <h3 class='panel-title'><b>Log</b></h3>
    </div>
    {{ Form::textarea('log', '', array('disabled',
                                       'class' => 'form-control',
                                       'id' => 'log')); }}
  </div>
</div>
@stop
