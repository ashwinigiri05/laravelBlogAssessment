@extends('layouts.master')

  @section('content')
    <div class="col-sm-8 blog-main">
      <h3><p class="text-primary">Create Blog</p></h3>
      <hr>

      <form method="POST" action = "/tasks">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="title">Title:</label>
             <input type="text" class=" control{{ $errors->has('title') ? 'is-danger' : '' }}" id="title" name="title" >
           </div>

          <div class="form-group"> 
            <label for="description ">Description :</label>
            <textarea name="description" id="description" class="control{{ $errors->has('description') ? 'is-danger' : '' }}"></textarea>
          
        </div>
            
          <button type="submit" class="btn btn-info">Create</button>
        
      </form>
          
           @if ($errors->any())
              <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                 @endforeach
                </ul>
                 
              </div>  
          @endif
   
       
     </div> 
   
  @endsection