@extends('layouts.app')
@section('content')

    <div class="container-xxl">   
        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title">Create Roles</h4>                      
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                  
                                    </div><!--end card-header-->
                                    <div class="card-body pt-0">
                                        <form id="form-validation-2" class="form" method ="POST" action = "{{route('role.update',$row->id)}}">
                                            @csrf
                                            @method('put')
                                            <div class="mb-2">
                                                <label for="name" class="form-label">Name</label>
                                                <input name="name" class="form-control" type="text" value="{{$row->name}}">
                                                {{-- <small>Error Message</small> --}}
                                            </div>
                                            <div class="mb-2">
                                                <label for="email" class="form-label">Description</label>
                                                <textarea name = "description" class = "form-control" rows ="2">{{$row->description}}</textarea>
                                                
                                                
                                            </div>
                                            
                                            <button type="submit"  class="btn btn-primary">Save</button>
                                        </form><!--end form-->            
                                    </div><!--end card-body--> 
                                </div><!--end card--> 
                            </div> <!--end col-->                                                                                
                        </div><!--end row-->
                                        
                    </div><!-- container -->

@endsection