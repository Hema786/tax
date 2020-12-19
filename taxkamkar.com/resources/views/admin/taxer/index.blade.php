@extends('admin.layout.master')

@section('content')

    <div id="main-wrapper">
    @include('admin.includes.sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tax Management</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('taxer')}}">tax</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tax List</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>First name</th>
											<th>Middle name</th>
											<th>Last name</th>
											<th>Gender</th>
                                            
                                            <!---<th>Action</th>--->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($taxes as $salary)
                                            <tr>
                                                <td>{{$loop -> index+1 }}</td>
                                                <td>{{$salary ->first_name }}</td>
                                                <td>{{$salary->middle_name}}</td>
												<td>{{$salary->last_name}}</td>
												<td>{{$salary->gender}}</td>
                                               <!--- <td>
                                                    <form action="{{route('taxer.delete',$salary->id)}}" method="put">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{route('taxer.edit',$salary->id)}}" class="btn btn-sm btn-dark">Edit</a>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>--->
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    {{ $taxes->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center">
                All Rights Reserved by Taxkamkar. Ltd. Designed and Developed by <a href="https://www.digitalwebspot.com/">Digitalwebspot</a>.
            </footer>
        </div>
    </div>

@endsection