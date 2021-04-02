@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-title pt-2 pb-2">
            <h2 class="text-muted text-center">Enter a New Record</h2>
            <a href="#" class="btn btn-primary">Import from Excel</a>
        </div>
        <div class="card-body pt-2">
            <hr>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/eddy" method="post" class="">
                @csrf
                <!-- Class of the name, email & Address -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Clients Name</label>
                            <input class="form-control" type="text" placeholder="Name" name="name">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Clients Email Address</label>
                            <input class="form-control" type="email" placeholder="Email Address" name="email">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Clients Address</label>
                            <input class="form-control" type="text" placeholder="Address" name="address">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Clients National ID</label>
                            <input class="form-control" type="tel" placeholder="National ID" name="national_ID">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Clients KRA PIN</label>
                            <input class="form-control" type="tel" placeholder=" KRA PIN" name="Kra_pin">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Vehicle Registration</label>
                            <input class="form-control" type="text" placeholder="Vehicle Registration"
                                name="registration_no">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Policy Number</label>
                            <input class="form-control" type="tel" placeholder="Policy Number" name="policy_no">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Make/Model of the car</label>
                            <input class="form-control" type="text" placeholder="Make/Model of the car"
                                name="make_of_car">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Color of the vehicle</label>
                            <input class="form-control" type="text" placeholder="Color of the vehicle" name="color">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="cover_type" class="">Insurance Cover Type</label>

                            <select name="cover_type" class="form-control">

                                <option>Select</option>
                                <option value="Comprehensive">Comprehensive</option>
                                <option value="Third Party Fire and Theft">Third Party Fire and Theft
                                </option>
                                <option value="Third Party Property Damage">Third Party Property
                                    Damage</option>
                                <option value="Compulsory Third Party ">Compulsory Third Party
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Year of the car Manufacuture</label>

                           <select name="year_of_manufacture" class="form-control">
                             <option>Select Year of Manufacuture</option>
                            @for ($year = (int)date('Y'); 1970 <= $year; $year--)
                             <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                          </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Chasis Number</label>
                            <input class="form-control" type="tel" placeholder="Chasis Number" name="chasis_no">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Engine Number</label>
                            <input class="form-control" type="tel" placeholder="Engine Number" name="engine_no">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Cubic Capacity</label>
                            <input class="form-control" type="tel" placeholder="Cubic Capacity" name="cubic_capacity">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Basic rate(%)</label>
                            <input class="form-control" type="number" placeholder="Basic rate(%)" name="basic_rate"
                                pattern="[0-9]{2}" title="Two numbers">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Excess protector(%)</label>
                            <input class="form-control" type="tel" placeholder="Excess protector(%)"
                                name="excess_protector" size="2" minlength="1" maxlength="2">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Political risk(%)</label>
                            <input class="form-control" type="tel" placeholder="Political risk(%)" name="political_risk"
                                size="2" minlength="1" maxlength="2">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Commencement Date</label>
                            <input class="form-control" type="date" placeholder="Commencement Date"
                                name="commencement_date">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="" class="">Expiry Date</label>
                            <input class="form-control" type="date" placeholder="Expiry Date" name="expiry_date">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <button class="btn btn-primary" name="submit">Save</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection
