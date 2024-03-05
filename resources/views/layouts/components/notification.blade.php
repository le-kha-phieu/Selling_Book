@vite(['resources/scss/app.scss'])

@if ($message = Session::get('success'))
    <div class="notify-all success">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="notify-all error">
        <p>{{ $message }}</p>
    </div>
@endif
