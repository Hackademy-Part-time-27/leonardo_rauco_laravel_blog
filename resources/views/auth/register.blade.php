<x-layout title="Registrati">
    <h1>Registra un nuovo account</h1>
    <div class="mt-5">
        <form action="/register" method="POST" >
            @csrf
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text"name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name') <span class="small text-error">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email"name="email" id="email" class="form-control" value="{{ old('email') }}">
                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mt-5">
        <form action="/register" method="POST" >
            @csrf
            <div class="col-12">
                <label for="password">Password</label>
                <input type="password"name="password" id="password" class="form-control">
                @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="password">Conferma Password</label>
                <input type="password"name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            <div class="col-12">
               <button type="sumbit" class="btn btn-primary">Registrati</button>
            </div>

        </form>
</div>
</x-layout>