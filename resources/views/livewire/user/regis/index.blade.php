<div>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Event Registration') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    @if (session()->has('message'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($isModalOpen)
                    @include('livewire.user.regis.create')
                    @endif

                    <head>
                        <style>
                            table th {
                                width: 500px;
                                text-align: left;
                            }

                            td.text {
                                text-align: justify;
                                padding: 5px;
                            }

                            table table,
                            table table td {
                                border: 1px solid #000;
                            }
                        </style>
                    </head>


                    <body>
                        @forelse($regis as $i)
                        <table style="width:75%">
                            <tr>
                                <th>Full Name </th>
                                <td>: {{$i->nama_lengkap}}</td>
                            </tr>
                            <tr>
                                <th>Profession </th>
                                <td>: {{$i->profession}}</td>
                            </tr>
                            <tr>
                                <th>Are you a local Clinical Microbiologist or Resident?</th>
                                <td>: {{$i->PAMKI}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>: {{$i->phone}}</td>
                            </tr>
                            <tr>
                                <th>Institution</th>
                                <td>: {{$i->institusi}}</td>
                            </tr>
                            <tr>
                                <th>Accomodation</th>
                                <td>: {{$i->accomodation}}</td>
                            </tr>
                        </table>
                        <button wire:click="edit({{ $i->id }})" class="flex px-4 py-2 bg-gray-500 text-gray-900 cursor-pointer"> Edit Identity </button>

                        @empty

                        <button wire:click="create()" class="my-4 inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base font-bold text-white shadow-sm hover:bg-red-700">
                            Fill your Event Registration Form
                        </button>

                        @endforelse


                    </body>
                </div>
            </div>
        </div>

    </div>
</div>