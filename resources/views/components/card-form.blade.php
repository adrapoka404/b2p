<div class="min-h-full flex flex-col-2 sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full sm:max-w-5xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg grid grid-cols-2">
        <div class="hidden sm:block imagen">
            <img class=" xl:h-60 lg:h-56  md:h-64 sm:h-72 xs:h-72 rounded object-cover object-center mb-4 -ml-4 "
            src="https://picsum.photos/720/400" alt="Image Size 720x400" />
        </div>
        {{ $slot }}
    </div>
</div>