<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="wrapper">

        <div class="table">
            <div class="row">

                <div>
                    <p class="head1">Staffs</p>
                    @foreach($staff as $staff)

                        <div class="head2">{{ $staff; }}</div>

                    @endforeach
                </div>

            </div>

        </div>
    </div>



    
</x-app-layout>
