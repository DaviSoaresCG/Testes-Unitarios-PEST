<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- se for null, '' --}}
    <title>{{$title ?? ''}}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    <ul>
        <li @if($pageSlug == 'home') class="font-bold" @endif>
            <a href="{{route('home')}}">Home</a>
        </li>
        <li @if($pageSlug == 'contact') class="font-bold" @endif>
            <a href="{{route('contact')}}">Contact</a>
        </li>
        <li @if($pageSlug == 'about') class="font-bold" @endif>
            <a href="{{route('about')}}">About Us</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>