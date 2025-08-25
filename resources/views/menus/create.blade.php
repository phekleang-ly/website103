@extends('layouts.app')
@section('content')
<div class="container-xxl">   
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">                      
                            <h4 class="card-title">Create Menu</h4>                      
                        </div>
                    </div>                                  
                </div>
                <div class="card-body pt-0">
                    <form method="POST" action="{{ route('menu.store') }}">
                        @csrf
                        <div class="mb-2">
                            <label for="title" class="form-label">Menu Title</label>
                            <input name="title" class="form-control" type="text" placeholder="Title">
                        </div>

                        <div class="mb-2">
                            <label for="sub_title" class="form-label">Sub Title</label>
                            <input name="sub_title" class="form-control" type="text" placeholder="Sub Title">
                        </div>

                        <div class="mb-2">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="2" placeholder="Description"></textarea>
                        </div>

                        <div class="mb-2">
                            <label for="active" class="form-label">Active</label>
                            <select name="active" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>            
                </div>
            </div> 
        </div>                                                                                
    </div>
</div>
@endsection
