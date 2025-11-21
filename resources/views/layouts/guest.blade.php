@props(['title'=>'','bodyClass'=>'','footerLink'=>''])
<x-base-layout :$title :$bodyClass>

     <main class="d-inline-block w-100 justify-content-center items-center">
        {{ $slot }}
        
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
                </div>
                <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
                </div>
                <div class="text-center">
                <x-google-button/>
                <x-fb-button/>
            </div>


            {{ $footerLink }}
        </form>
    
    </main>
    
</x-base-layout>