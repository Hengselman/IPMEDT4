@extends('default')

@section('title', 'Register')

@section('content')
<article>

    <form action="/registernew" method="POST" enctype="multipart/form-data">
        @csrf
        <header>
            <h1>Maak uw account</h1>
        </header>
        
        <section>
            <label for="name">Naam</label>
            <input name="name" id="name" type="text" />
        </section>

        <section>
            <label for="email">Email</label>
            <input name="email" id="email" type="text" />
        </section>

        <section>
            <label for="password">Wachtwoord</label>
            <input name="password" id="password" type="text" />
        </section>

        <section>
            <label for="age">Leeftijd</label>
            <input name="age" id="age" type="number" />
        </section>

        <button type="submit">Registreer</button>
    </form>
</article>
            