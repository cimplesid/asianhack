@extends('backend.layouts.app')

@section('title', 'signup')

@section('guest')
     <h2>Register</h2>
    <form method="POST" action="/signup">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
 
@endsection


    <footer class="text-center">
        <p>
            Copyright &#183; {{ setting('title') }} &#183; {{date('Y')}}
        </p>
    </footer>
@endsection

@push('styles')
<style type="text/css">
    .logo {
        margin-top: 80px;
        margin-bottom: 15px;
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
@endpush
