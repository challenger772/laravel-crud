@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display">Add a contract</h1>
            <div>
                @if ($error->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($error->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br>
                @endif
                    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" value={{ $contact->first_name }}/>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value={{ $contact->last_name }}>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" value={{ $contact->email }}>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control" value={{ $contact->city }}>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control" value={{ $contact->country }}>
                        </div>
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" name="job_title" class="form-control" value={{ $contact->job_title }}>
                        </div>
                        <button type="submit" class="btn btn-primary-outline">Update</button>
                    </form>
            </div>
        </div>
    </div>    
@endsection