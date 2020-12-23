@extends('master')
@section('title','Database Management')
@section('content')
     
        <div class="row">
            <div class="col-md-12">
                <h3 align="center">Input Data</h3>

                <form action="{{url('user')}}" method="POST"> 
                    {{csrf_field()}} 
                    {{-- 
                        cross-site request forgery
                        ทำหน้าที่ป้องกันการสร้างตัว request ที่ไม่พึงประสงค์ --}}
                    <div class="form-group">
                        <input type="text" name="fname" id="fname"  class="form-control" placeholder="FirstName">
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="lanme" id="lanme"  class="form-control" placeholder="LastName">
                    </div><br>
                    <div class="form-group">
                        <input type="number" name="age" id="age"  class="form-control" placeholder="Age">
                    </div><br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
@endsection