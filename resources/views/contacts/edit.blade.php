<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="edit-form-container">
            <h1>Edit Contact</h1>

            <!-- Display success or error messages -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
                @csrf
                @method('PUT')

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $contact->name }}" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $contact->email }}" required>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="{{ $contact->phone }}">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{ $contact->address }}">

                <button type="submit">Update</button>
                <button><a href="/contacts" style="text-decoration: none">Cancel</a></button>
            </form>
        </div>
    </div>
</body>

</html>
