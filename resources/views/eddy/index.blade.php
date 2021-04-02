@extends('layouts.app')

@section('content')



<div class="container-fluid">

</div>

<div class="card mb-4">
    <div class="card-header">
        <div class="mt-4">
            <a href="" class="btn btn-success ml-2 mr-2">Export to Excel</a>
            <a href="" class="btn btn-danger">Export to PDF</a>
        </div>
        <h2 class="display-6 text-center">All Details</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>National ID</th>
                        <th>Reg No</th>
                        <th>Policy No</th>
                        <th>Make/Model</th>
                        <th>Cover Type</th>
                        <th>Year of Man</th>
                        <th>Chasis No</th>
                        <th>Engine No</th>
                        <th>Commencement Date</th>
                        <th>Expiry Date</th>
                        <th colspan="2" > Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td>{{$client->name}}</td>
                        <td>{{$client->national_ID}}</td>
                        <td>{{$client->registration_no}}</td>
                        <td>{{$client->policy_no}}</td>
                        <td>{{$client->make_of_car}}</td>
                        <td>{{$client->cover_type}}</td>
                        <td>{{$client->year_of_manufacture}}</td>
                        <td>{{$client->chasis_no}}</td>
                        <td>{{$client->engine_no}}</td>
                        <td>{{$client->commencement_date}}</td>
                        <td>{{$client->expiry_date}}</td>
                        <td> <a href="/edit/{{$client->id}}" class="btn btn-danger ">Edit</a></td>
                        <td> <a href="/show/{{$client->id}}" class="btn btn-primary ">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


</div>

@endsection
