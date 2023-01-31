<x-layout>
    <div class="flex justify-start  bg-red500">
        <x-sidebar />
        <div class="relative w-[80vw] overflow-x-auto shadow-md sm:rounded-lg">
            <div class="p-4 flex justify-between place-items-center bg-slate-100 ">
                <h1 class="font-semibold">Register a book.</h1>
            </div>
            <x-createbookform :data="$data"/>
        </div>
    </div>
</x-layout>