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
        <div class="contact-container">
            <h1>Contact Details</h1>
    
            <p><span class="label">Name:</span> {{ $contact->name }}</p>
            <p><span class="label">Email:</span> {{ $contact->email }}</p>
            <p><span class="label">Phone:</span> {{ $contact->phone }}</p>
            <p><span class="label">Address:</span> {{ $contact->address }}</p>
    
            <a href="{{ route('contacts.edit', $contact->id) }}" style="text-decoration: none" class="edit-link">Edit Contact</a>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Delete Contact</button>
            </form>
            <button><a href="/contacts" style="text-decoration: none" class="edit-link">Back to Contacts List</a></button>
        </div>
    </div>

</body>

</html>
