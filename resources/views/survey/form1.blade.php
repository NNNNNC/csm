@extends('layout.app')

@section('title', 'Survey - Step 1')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;0,800;1,500;1,600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
    }

    h1,
    label,
    .form-check-label {
        font-weight: 500;
    }

    .btn {
        font-weight: 700;
    }

    .form-check-input {
        border-color: black;
    }

    input,
    select,
    textarea {
        font-weight: 100;
    }
</style>

<div class="d-flex justify-content-center align-items-center p-5" style="margin-top: 150px;">
    <div class="container shadow p-4 rounded bg-white" style="max-width: 800px;">
        <h1 class="text-center">Client Satisfaction Survey - Step 1</h1>
        <hr>
        <br>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('survey.storeStep1') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="client_type">Client Type:</label>
                <select class="form-select" id="client_type" name="client_type" required>
                    <option value="" disabled {{ old('client_type') ? '' : 'selected' }}>Select Type</option>
                    <option value="Citizen" {{ old('client_type') == 'Citizen' ? 'selected' : '' }}>Citizen</option>
                    <option value="Business" {{ old('client_type') == 'Business' ? 'selected' : '' }}>Business</option>
                    <option value="Government" {{ old('client_type') == 'Government' ? 'selected' : '' }}>
                        Government (Employee or another agency)
                    </option>
                </select>
            </div>

            <div class="row">
                <div class="col">
                    <label class="form-label" for="date">Date Visited:</label>
                    <input class="form-control" type="date" id="date" name="date" value="{{ old('date') }}" required>
                </div>
                <div class="col">
                    <label class="form-label" for="age">Age:</label>
                    <input class="form-control" type="number" id="age" name="age" min="0" max="120" value="{{ old('age') }}" required>
                </div>
            </div>

            <label class="form-label mb-2 mt-3">Sex:</label>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="male" name="sex" value="Male" {{ old('sex') == 'Male' ? 'checked' : '' }}>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="female" name="sex" value="Female" {{ old('sex') == 'Female' ? 'checked' : '' }}>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold" for="office_visited">Select Office:</label>
                    <select name="office_visited" id="office_visited" class="form-control w-100">
                        <option value="" selected disabled>Select an Office</option>
                        @foreach($offices as $office)
                        <option value="{{ $office->id }}">{{ $office->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold" for="service">Availed Service:</label>
                    <select name="service" id="service" class="form-control w-100">
                        <option value="" selected disabled>Select a service</option>
                        
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a class="btn btn-outline-primary" href="{{ route('survey.intro') }}">Back</a>
                <button class="btn btn-primary" type="submit">Next</button>
            </div>
        </form>
    </div>
</div>

@endsection