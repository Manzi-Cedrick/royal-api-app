@if (session()->has('message'))
    <div class="fixed py-5 px-44 top-0 left-[45%] z-index-100 bg-laravel text-white flex justify-center place-items-center">
        <p>{{session('message')}}</p>
    </div>
@endif