<x-layout>
    <h1>
        Register a new user
    </h1>

    <form action="{{route("register")}}" method="post">
        @csrf

        Username:
        <br>
        <input type="text" name="username" value="{{old("username")}}">
        @error("username")
            {{$message}}
        @enderror
        <br>
        <br>

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

        Confirm Password:
        <br>
        <input type="password" name="password_confirmation">
        <br>
        <br>

        <input type="submit" name="Register" value="Register">
    </form>
</x-layout>