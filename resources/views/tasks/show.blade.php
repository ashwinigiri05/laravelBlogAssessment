@extends('layouts.master')

    @section('content')
        <div class="col-sm-8 blog-main">
            <h1 class="text-dark">{{ $task->title }}</h1>
            <p class="blog-post-meta text-info"><small>{{ $task->created_at->toFormattedDateString()}}<small></p>
            <h3 class="text-secondary">{{ $task->description }}</h3> 
            <hr class="border-info"> 

        <div class="box">
                <div class="card-block">
                    <form method="POST" action = "/tasks/{{$task->id}}/details " class="box">
                        {{ csrf_field() }}
                            <div class="field">
                                <label for="name">Name:</label>
                                <input type="text" class="control{{ $errors->has('name') ? 'is-danger' : '' }}"id="name" name="name">
                            </div>                  
                            <div class="field">
                                <label for="email">Email:</label>
                                <input type="text" class="control{{ $errors->has('email') ? 'is-danger' : '' }}" id="email" name="email">
                            </div>
                            <div class="field">
                                <label for="comment">Comment:</label>
                                <textarea name="comment" id="comment" class="control{{ $errors->has('comment') ? 'is-danger' : '' }}" ></textarea>
                            </div>
                            <hr class="border-info"> 
                            <button type="submit" class="btn btn-info">Add Comment</button>
                            @if ($errors->any())
                            <div class="notification is-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                  <p class="text-danger">{{ $error }}</p>
                               @endforeach
                              </ul>
                               
                            </div>  
                        @endif
      
    
                    </form>        
                </div>
            </div>
            <hr class="border-info"> 
        @if ($task->details->count())
            <div >
                    <style>
                            #customers {
                              font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                              border-collapse: collapse;
                              width: 100%;
                            }
                            
                            #customers td, #customers th {
                              border: 1px  #ddd;
                              padding: 8px;
                            }
                            
                            #customers tr:nth-child(even){background-color: #f2f2f2;}
                            
                            #customers tr:hover {background-color: #ddd;}
                            
                            #customers th {
                              padding-top: 12px;
                              padding-bottom: 12px;
                              text-align: left;
                              background-color:#666699;
                              color: white;
                            }
                            </style>
                <table id="customers">
                        <thead class="thead-light">
                       
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Comment</th>
                            <th scope="col">email</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach ($task->details as $detail)
                          <tr>
                            <td><strong>{{ $detail->name }}</strong></td>
                            
                            <td><strong>{{ $detail->comment}} :</strong><small>{{ $detail->created_at->diffForHumans()}}</small></td> 
                           
                            <td><strong>{{ $detail->email}}</strong></td>
                          </tr>
                          @endforeach
                        </tbody>
                       
                       </table>
                
              
            </div>
        @endif
        
        
        
        </div>
    @endsection