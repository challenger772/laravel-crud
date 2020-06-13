@extends('base')

@section('main')
    <div>
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <h1>Contacts</h1>
        <div>
            <a href="{{ route('contact.create') }}" class="btn btn-primary">New Contact</a>
        </div>
        <table class="table table-striped"> 
            <thead>
                <tr>
                    <td>FirstName</td>
                    <td>LastName</td>
                    <td>Email</td>
                    <td>City</td>
                    <td>Country</td>
                    <td>JobTitle</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->first_name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->city}}</td>
                        <td>{{$contact->country}}</td>
                        <td>{{$contact->job_title}}</td>
                        <td>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection