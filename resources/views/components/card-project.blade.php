<div class="mx-5 my-5 c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
    <img class=" xl:h-60 lg:h-56  md:h-64 sm:h-72 xs:h-72 rounded object-cover object-center mb-4 "
        src="{{ Storage::url($project_image)}}" alt="Image Size 720x400" />
    <div class="p-4">
        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">
            {{$project_user}}
        </h3>
        <h2 class="text-lg text-gray-900 font-medium title-font mb-4 whitespace-nowrap truncate ... ">
            {{$project_name}}
        </h2>
        <p class=" text-gray-600 font-light text-md whitespace-nowrap truncate ... ">
            {{$project_sumary}}
            <br />
            <a class="inline-flex text-indigo-500" href="#">{{__('Saber más')}}</a>
            <x-binvertir>
                invertir
                </x-binvierte>
        </p>

        <div class="py-4 border-t border-b text-xs text-gray-700">
            <div class="grid grid-cols-6 gap-1">
                <div class="col-span-2">
                    Meta:
                    <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-red-400 rounded-full ">{{$project_goal}}</span>
                </div>

                <div class="col-span-2">
                    Rendimientos:
                    <span
                        class=" inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-green-400 rounded-full ">{{$project_returns}}</span>
                </div>

                <div class="col-span-2">
                    Avance:
                    <span
                        class=" inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-blue-400 rounded-full ">10%
                    </span>
                </div>
            </div>
        </div>

        <div class="flex items-center mt-2">
            <img class="w-10 h-10 object-cover rounded-full" alt="User avatar"
                src="https://i.pravatar.cc/200" />

            <div class="pl-3">
                <div class="font-medium">{{$project_user}}</div>
                <div class="text-gray-600 text-sm">{{$project_tradename}}</div>
            </div>
        </div>
    </div>
</div>