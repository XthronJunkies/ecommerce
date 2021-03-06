@extends('layouts.admin.main')

@section('content')
  <div class="panel panel-white">
			<div class="panel-heading">
				<h1 class="panel-title">Create New Brand</h1>
			</div>

			<div class="panel-body">

        {{ Form::open(array('route' => 'brands.store', 'files' => true, 'class' => 'form-horizontal form-validate-jquery', 'action' => '#')) }}
          <div class="form-group">
            {{ Form::label('name', 'Brand Name: ', array('class' => 'control-label col-lg-2')) }}
            <div class="col-lg-10">
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => 'required')) }}
            </div>
          </div>
          <div class="form-group">
            {{ Form::label('description', 'Description: ', array('class' => 'control-label col-lg-2')) }}
            <div class="col-lg-10">
            {{ Form::textarea ('description', null, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="form-group">
            {{ Form::label('image', 'Logo: ', array('class' => 'control-label col-lg-2')) }}
            <div class="col-lg-10">
            {{ Form::file('image', array('class' => 'file-input-custom', 'accept' => 'image/*')) }}
            </div>
        </div>
        <div class="text-right">
            {{-- {{ Html::linkRoute('categories.index', '<i class="icon-check position-left"></i>Cancel', array(), array('class' => 'btn btn-default text-left')) }} --}}
            {{ Form::button('<i class="icon-check position-left"></i>Create', array('type' => 'submit', 'class' => 'btn btn-success')) }}
        </div>
        {{ Form::close() }}
      </div>
		</div>
		<!-- /form horizontal -->
@endsection
