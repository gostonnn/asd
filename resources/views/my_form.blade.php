<h1>Töltse ki a mezőket!</h1>


<!-- @if( $errors->any() )
    <ul>
        @foreach( $errors->all() as $error )
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
@endif -->




<form action="submit-student" method="post">

{{@csrf_field()}}

<p>
    Név: <input type="text" name="name" value="{{ old('name')}}" placeholder="Név" > 
    <br>
    @error( "name")
        <span>{{ $message }}</span>
    @enderror
</p>

<p>
    Email: <input type="text" name="email" value="{{ old('email')}}" placeholder="Email" > 
    <br>
    @error( "email")
        <span>{{ $message }}</span>
    @enderror
</p>

<p>
    Telefon: <input type="text" name="phone" value="{{ old('phone')}}" placeholder="Telefonszám" > 
    <br>
    @error( "phone")
        <span>{{ $message }}</span>
    @enderror
</p>

<p>
    <button type="submit">Küldés</button>
</p>

</form>