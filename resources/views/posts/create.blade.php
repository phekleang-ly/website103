@extends('layouts.app')
@section('content')

    <div class="container-xxl">   
        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title">Create Posts</h4>                      
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                  
                                    </div><!--end card-header-->
                                    <div class="card-body pt-0">
                                        <form id="form-validation-2" class="form" method ="POST" enctype="multipart/form-data" action = "{{route('post.store')}}">
                                            @csrf
                                            <div class="mb-2">
                                                <label for="title" class="form-label">Title</label>
                                                <input name="title" class="form-control" type="text" rows="2" placeholder="Name">
                                                
                                            </div>
                                            <div class="mb-2">
                                                <label for="sub_title" class="form-label">SubTitle</label>
                                                <input name="sub_title" class="form-control" type="text" rows="2" placeholder="">
                                                
                                            </div>

                                            <div class="mb-2">
                                                <label for="content" class="form-label">Content</label>
                                                <input name="content" class="form-control" type="text" rows="2" placeholder="Name">
                                                
                                            </div>

                                             <div class="mb-2">
                                                <label for="email" class="form-label">Description</label>
                                                <textarea name = "description" class = "form-control" rows ="2" placeholder="Description"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="inputImage" class="form-label"><strong>Image:</strong></label>
                                                <input 
                                                    type="file" 
                                                    name="image" 
                                                    class="form-control @error('image') is-invalid @enderror" 
                                                    id="inputImage">
                                                @error('image')
                                                    <div class="form-text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            
                                            <div class="mb-2">
                                                <label for="active" class="form-label">Active</label>
                                                <select name="active" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>

                                            
                                            <button type="submit"  class="btn btn-primary">Save</button>
                                        </form><!--end form-->            
                                    </div><!--end card-body--> 
                                </div><!--end card--> 
                            </div> <!--end col-->                                                                                
                        </div><!--end row-->
                                        
                    </div><!-- container -->

@endsection