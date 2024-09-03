<x-layout>
    <h1>
        Home
    </h1>

    @auth
        <h1>
            Logged-In
        </h1>
    @endauth

    @guest
        <h1>
            Guest User
        </h1>
    @endguest
</x-layout>