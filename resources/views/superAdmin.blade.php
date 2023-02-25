<x-app-layout>
    <x-slot name="header">
        <div style="display:flex; justify-content:space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Super Admin') }}
            </h2>
            <a href="/addAdmin" class="btn1">Add Admin</a>
        </div>
    </x-slot>

    <div>

        <div class="wrapper">

            <div class="table">
                <div class="row">
                    
                    <div>
                        <p class="head1">Super Admin</p>
                        @foreach($SuperAdmin as $SuperAdmin)

                            <div class="head2">{{ $SuperAdmin; }}</div>

                        @endforeach
                    </div>
                        
                    <div>
                        <p class="head1">Admin</p>
                        @foreach($admin as $admin)

                            <div class="head2">{{ $admin; }}</div>

                        @endforeach
                    </div>

                    <div>
                        <p class="head1">Staffs</p>
                        @foreach($staff as $staff)

                            <div class="head2">{{ $staff; }}</div>

                        @endforeach
                    </div>

                </div>

            </div>


        </div>
        
    </div>

    
</x-app-layout>
