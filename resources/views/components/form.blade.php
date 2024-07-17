<form {{ $attributes->merge() }} @if($method !== "GET") method="POST" @endif>
    @if($method !== "GET")
        @method($method)
        @csrf
    @endif
    {{ $slot }}
</form>
