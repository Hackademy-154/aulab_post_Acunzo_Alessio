<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
    <div class="row justify-content-center">
        <div class="col-12">
        <h1>Registrati</h1>
        </div>
    </div>
    </div>
    <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
        <form action="{{ route('register') }}" method="POST" class="card p-5 shadow">
            @csrf
            <div class="mb-3">
            <label for="name" class="form-label">Nome utente</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="mb-3">
            <label for="password_confirmation" class="form-label">Conferma password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Registrati</button>
            <p class="mt-3">Sei già registrato? <a href="{{ route('login') }}">Clicca qui</a></p>
        </form>
        </div>
    </div>
    </div>
</x-layout>
