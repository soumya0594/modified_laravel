@extends('layouts.layout')
@section('content')


<div class="container text-center mt-3 mx-auto header-only rounded" style="font-family: consolas;" >
        <h5 class="form-header" >Backward Classes Welfare Department<br>Government of West Bengal</h5>
</div>
<div class="container">
    <marquee behavior="scroll" direction="left" class="mt-3 mx-auto display-6 text-dark">Welcome to Backward Classes Welfare Department</marquee>
    <div class="bg-info d-flex fs-5 rounded ">
        <div class="col-4 p-3 ">
            <a href="{{ url('dashboard/apply') }}" class="text-dark ">Application for SC/ST/OBC Certificate</a>
        </div>
        <div class="col-8 border-start border-dark border-3 text-wrap">
            <p class="text-dark p-3 fw-bold lh-base" align="justify">The Backward Classes Welfare Department, a Department under the Govt. of West Bengal is working towards sustainable development of the persons belonging to the Schedules Castes, Scheduled Tribes and Other Backward Classes of West Bengal. The main aim of the Department is to improve the quality of life of these socially and economically backward classes and enhancement of capability of the people belonging to these communittees, so that they can be very much part & parcel of the mainstream of the Society.</p>
        </div>

    </div>
</div>
@stop
