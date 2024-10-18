<div class="shadow bg-pink-400 sticky top-0 z-50">
    <div class="h-16 mx-auto px-0 md:px-5 flex items-center justify-between">
        <a href="{{ route('landing') }}" class="font-poppins text-2xl text-white font-extra-bold hover:text-3xl transition-colors cursor-pointer">ContactApp</a>

        <ul class="flex items-center gap-5">
            <li><a class="font-poppins text-white hover:underline transition-colors invisible md:visible" href="{{ route('landing') }}">Home</a></li>
            <li><a class="font-poppins text-white hover:underline transition-colors invisible md:visible" href="">About Us</a></li>
            <li><a class="font-poppins text-white hover:underline transition-colors invisible md:visible" href="">Services</a></li>
            <li>
                <a class="font-poppins bg-white text-pink-400 px-4 py-2 rounded hover:bg-pink-300 hover:text-white transition-colors" href="{{ route('login') }}">Sign In</a>
            </li>
        </ul>
    </div>
</div>