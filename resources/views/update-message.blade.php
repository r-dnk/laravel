@extends('layouts.app')

@section('title-block')
    Update message
@endsection

@section('content')
    <h1>Update message</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Write name</label>
            <input type="text" value="{{$data->name}}" name="name" placeholder="White name"
            id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Write Email</label>
            <input type="text" value="{{$data->email}}" name="email" placeholder="White email"
                   id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" value="{{$data->subject}}" name="subject" placeholder="White subject"
                   id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>

        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
