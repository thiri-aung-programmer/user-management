{{-- <div>
        {{ $test }}
</div> --}}
    {{-- Find a car form --}}
     <section class="find-a-car fw-bold p-3 bg-info-subtle"> 
        <h2>This is a pg for finding a car</h2>
        <form action="{{ $action }}" method="{{ $method }}">
            <div class="row">
                <label for="">Name</label>
                <input type="text">
            </div>
            <div class="row">
                <label for="">Email</label>
                <input type="email">
            </div>
            
        </form>

     </section>
     {{-- Find a car form --}}