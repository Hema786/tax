@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('salary.store')}}" method="post" class="form-horizontal">
				@csrf
				<div class="card-body">
					<h4 class="card-title">Add Salary</h4>
					<div class="form-group row">
						<label for="fname" class="col-sm-3 text-right control-label col-form-label">Salary Amount</label>
						<div class="col-sm-9">
							<input type="text" name="salary_amount" class="form-control" id="fname" placeholder="Enter a salary amount">
						</div>
					</div>
					<div class="form-group row">
						<label for="fname" class="col-sm-3 text-right control-label col-form-label">Salary Amount</label>
						<div class="col-sm-9">
							<input type="text" name="salary_amount" class="form-control" id="fname" placeholder="Enter a salary amount">
						</div>
					</div>
				</div>
				<div class="border-top">
					<div class="card-body">
						<button type="submit" class="btn btn-dark">Add</button>
					</div>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection
