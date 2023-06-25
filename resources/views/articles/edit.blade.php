
@extends('articles.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
            </div>
        </div>
    </div>
   

  
    <form action="{{ route('articles.update',$article->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="center">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $article->title }}" class="form-control" placeholder="Title field is required " maxlength="10">
                    @if ($errors->has('title')) <p class= "font-36">{{ $errors->first('title')}}</p> @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subject:</strong>
                    <input class="form-control"  name="subject" value="{{ $article->subject }}" placeholder="Subject field is required " maxlength="10">
                    @if ($errors->has('subject')) <p  class= "font-36">{{ $errors->first('subject')}}</p> @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Body:</strong>
                <div class="form-group">
                    
                    <textarea type="text" name="body" style="height:150px" value="{{ $article->body }}" class="form-control" placeholder="Body field is required">{{ $article->body }}</textarea>
                    @if ($errors->has('body')) <p class= "font-36">{{ $errors->first('body')}}</p> @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection