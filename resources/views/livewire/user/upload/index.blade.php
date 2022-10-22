<div>

    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Uploads') }}
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


                    <div>
                        <table class="table w-full">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>File Photo</th>
                                    <th>File Title</th>
                                    <!-- <th>File Name</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($upload as $upload)
                                <tr>
                                    <th class="align-baseline">{{ $loop->iteration }}</th>
                                    <td>
                                        <div class="avatar">
                                            <div class="w-20 h-20 mask mask-hexagon">
                                                <img src="{{ asset('storage/' . $upload->fileName) }}">
                                            </div>
                                        </div>
                                    </td>

                                    <td class="align-baseline">{{ $upload->fileTitle }}</td>
                                    <!-- <td class="align-baseline">{{ $upload->fileName }}</td> -->
                                    <td class="align-baseline">
                                        <button wire:click="delete({{ $upload->id }})" class="flex px-4 py-2 bg-gray-500 text-gray-900 cursor-pointer"> Delete </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="align-baseline">Empty</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    <div>
                        <form wire:submit.prevent="submit" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter title" wire:model="fileTitle">

                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" wire:model="fileName">

                            </div>

                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>