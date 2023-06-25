
@extends('articles.layout')
<body style='background-color:SeaShell'>
@section('content')

</style>
<div class="center">
    <div class="center">
        <div class="center">
            <h2 >Add New Article</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
        </div>
    </div>
</div>
   
   
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
  
     <div class="center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong> <br>
                <input type="text" name="title" class="form-control" placeholder="Title field is required " maxlength="10" required>
                @if ($errors->has('title')) <p class= "font-36">{{ $errors->first('title')}}</p> @endif
    </div>
            </div>
        </div>
        <div class="center">
            <div class="form-group">
                <strong>subject:</strong> <br>
                <input class="form-control"  name="subject" placeholder="Subject field is required " maxlength="10" required>
                @if ($errors->has('subject')) <p  class= "font-36">{{ $errors->first('subject')}}</p> @endif
    
        
    </div>
            </div>
        </div>
        <div class="center">
        <strong>body:</strong> <br> <div 
        class="form-group"> 
                <textarea class="form-control" style="height:150px" name="body" placeholder="Body field is required" maxlength="200" required></textarea>
                @if ($errors->has('body')) <p class= "font-36">{{ $errors->first('body')}}</p> @endif
    </div>
            </div>
        </div>
        <div class="center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection