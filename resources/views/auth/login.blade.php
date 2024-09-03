<x-layout>
    <h1>
        Welcome Back
    </h1>

    <form action="{{route("login")}}" method="post">
        @csrf

        E-Mail:
        <br>
        <Input type="text" name="email" value="{{old("email")}}">
            @error("email")
            {{$message}}
        @enderror
        <br>
        <br>

        Password:
        <br>
        <input type="password" name="password">
        @error("password")
            {{$message}}
        @enderror
        <br>
        <br>

        Remember me:
        <input type="checkbox" name="remember" id="remember">

        <input type="submit" name="Register" value="Register">
    </form>
</x-layout>