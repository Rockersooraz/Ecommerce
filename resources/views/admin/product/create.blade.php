@extends('admin.layout.app')


@section('main-section')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-offset-2 col-md-8">
            
                <br>
                <br>
                <div class="card-body">
    @include('includes.messages')
                    <form method="POST" enctype="multipart/form-data" action="{{route('post.store')}}">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}"
                                    required autofocus>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="price" class="col-md-2 col-form-label text-md-right">price</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}"
                                    required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                                  <label for="submit-category" class="col-md-2 col-form-label text-md-right">Category</label>
                                    <select class="col-lg-4" style="margin-left:20px" name="category">
                                        <option value="">Choose Category</option>
                                        
                                        @foreach($categories as $c)
                                          <option value="{{$c->title}}">
                                          	      {{$c->title}}
                                            </option>
                                         
                                         @endforeach
                                   </select>
                                </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} row">
                            <label for="description" class="col-md-2 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}"
                                    required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-2 col-form-label text-md-right">location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}"
                                    required autofocus>
                            </div>
                        </div>

                          <!-- multiple file upload -->
                           <div class="form-group row">
                            <label for="filename" class="col-md-2 col-form-label text-md-right">filename</label>

                        
                                  

                                <div class="col-md-6 file-upload">
                                      <input type="file" name="filename[]" class="form-control" multiple title="Click to add files" >
                                     
                                </div>    



                        
                            
                     

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    submit
                                </button>

                                <a href="{{ route('post.index') }}" class="btn btn-danger btn-sm float-right">
                                    Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection