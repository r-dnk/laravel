@extends('layouts.app')

@section('title-block')
    contacts
@endsection

@section('content')
    <h1>contacts</h1>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Write name</label>
            <input type="text" name="name" placeholder="White name"
            id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Write Email</label>
            <input type="text" name="email" placeholder="White email"
                   id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="White subject"
                   id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control"></textarea>

        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
