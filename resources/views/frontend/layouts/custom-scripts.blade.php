@if(session('error'))
    <script>

    </script>
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
