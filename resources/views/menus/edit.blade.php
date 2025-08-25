@extends('layouts.app')

@section('content')
    <div class="container-xxl">   
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Update Menus</h4>                      
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <form id="form-validation-2" class="form" method ="POST" action = "{{route('menu.update', $row -> id)}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <label for="title" class="form-label">Menu Title</label>
                                <input name="title" class="form-control" type="text" value="{{old('title', $row -> title) }}">
                                {{-- <small>Error Message</small> --}}
                            </div>
                            <div class="mb-2">
                                <label for="sub_title" class="form-label">Sub_Title</label>
                                <input name="sub_title" class="form-control" type="text" value="{{old('sub_title', $row -> sub_title) }}">
                                {{-- <small>Error Message</small> --}}
                            </div>
                            <div class="mb-2">
                                <label for="description" class="form-label">Description</label>
                                <textarea name = "description" class = "form-control" rows ="2">{{old('description', $row -> description) }}</textarea>
                            </div>
                            <div class="mb-2">
                                <label for="active" class="form-label">Active</label>
                                <input name="active" class="form-control" type="text" value="{{old('active', $row -> active) }}">
                                {{-- <small>Error Message</small> --}}
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form><!--end form-->            
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col-->                                                                                
        </div><!--end row-->
    </div><!-- container -->
@endsection