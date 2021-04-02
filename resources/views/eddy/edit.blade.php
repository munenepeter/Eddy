@extends('layouts.app')

@section('content')



<div class="col-md-11">
    <form action="/eddy" method="client" class="">
        @csrf
       <h1 class="text-bold">Update A Client's Record</h1>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="">Clients Name</label>
                    <input class="form-control" type="text" placeholder="Name" name="name" value="{{$post->name}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Clients Email Address</label>
                    <input class="form-control" type="email" placeholder="Email Address" name="email"
                        value="{{$post->email}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Clients Address</label>
                    <input class="form-control" type="text" placeholder="Address" name="address"
                        value="{{$post->address}}  ">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="">Clients National ID</label>
                    <input class="form-control" type="text" placeholder="National ID" name="national_ID"
                        value="{{$post->national_ID}}  ">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Clients KRA PIN</label>
                    <input class="form-control" type="text" placeholder=" KRA PIN" name="Kra_pin"
                        value="{{$post->Kra_pin}}  ">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Vehicle Registration</label>
                    <input class="form-control" type="text" placeholder="Vehicle Registration" name="registration_no"
                        value="{{$post->registration_no}}  ">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="">Policy Number</label>
                    <input class="form-control" type="text" placeholder="Policy Number" name="policy_no"
                        value="{{$post->policy_no}}  ">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Make/Model of the car</label>
                    <input class="form-control" type="text" placeholder="Make/Model of the car" name="make_of_car"
                        value="{{$post->make_of_car}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Color of the vehicle</label>
                    <input class="form-control" type="text" placeholder="Color of the vehicle" name="color"
                        value="{{$post->color}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="">Insurance Cover Type</label>
                    <input class="form-control" type="text" placeholder="Insurance Cover" name="cover_type"
                        value="{{$post->cover_type}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Year of the car Manufacuture</label>
                    <input class="form-control" type="date" placeholder="Year of the car Manufacuture"
                        name="year_of_manufacture" value="{{$post->year_of_manufacture}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Chasis Number</label>
                    <input class="form-control" type="text" placeholder="Chasis Number" name="chasis_no"
                        value="{{$post->chasis_no}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="">Engine Number</label>
                    <input class="form-control" type="text" placeholder="Engine Number" name="engine_no"
                        value="{{$post->engine_no}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Cubic Capacity</label>
                    <input class="form-control" type="text" placeholder="Cubic Capacity" name="cubic_capacity"
                        value="{{$post->cubic_capacity}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Basic rate(%)</label>
                    <input class="form-control" type="text" placeholder="Basic rate(%)" name="basic_rate"
                        value="{{$post->basic_rate}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Excess protector(%)</label>
                    <input class="form-control" type="text" placeholder="Excess protector(%)" name="excess_protector"
                        value="{{$post->excess_protector}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="">Political risk(%)</label>
                    <input class="form-control" type="text" placeholder="Political risk(%)" name="political_risk"
                        value="{{$post->political_risk}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Commencement Date</label>
                    <input class="form-control" type="date" placeholder="Commencement Date" name="commencement_date"
                        value="{{$post->commencement_date}}">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="" class="">Expiry Date</label>
                    <input class="form-control" type="date" placeholder="Expiry Date" name="expiry_date"
                        value="{{$post->expiry_date}}">
                </div>
            </div>

            <div class="col">
                <div class="mt-4 form-group">
                    <button class="btn btn-primary btn-lg" name="submit">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>


@endsection
