<div>
    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                @forelse($regis as $i)
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="">
                            <div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Full Name</label>
                                    <input type="text" class="form-control" id="nama_lengkap" wire:model="nama_lengkap">
                                    <!-- <input type="text" class="form-control" id="nama_lengkap" value="{{$i->nama_lengkap}}" wire:model="name_lengkap"> -->
                                    <small> Name with titles for Certificate </small>
                                </div>
                                <div class="form-group">
                                    <label for="profession">Profession</label>
                                    <select class="form-control" id="profession" wire:model="profession">
                                        <!-- <select class="form-control" id="profession" value="{{$i->profession}}" wire:model="profession"> -->
                                        <option></option>
                                        <option>(PIT PAMKI - 3rg GHI) Foreign Consultant</option>
                                        <option>(PIT PAMKI - 3rg GHI) Foreign Resident/Trainee</option>
                                        <option>(PIT PAMKI - 3rg GHI) Local Specialist</option>
                                        <option>(PIT PAMKI - 3rg GHI) Local Resident/Student</option>
                                        <option>(PIT PAMKI - 3rg GHI) Local General Practitioner or Other Health Profession</option>
                                        <option>(3rd GHI Only) Participant</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="PAMKI">Are you a local Clinical Microbiologist or Resident? </label>
                                    <select class="form-control" id="PAMKI" wire:model="PAMKI">
                                        <!-- <select class="form-control" id="PAMKI" :value="{{$i->PAMKI}}" wire:model="PAMKI"> -->
                                        <option></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <small id="PAMKI" class="form-text text-muted">
                                        Clinical Microbiologist Specialist and Resident get 15% discount
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" wire:model="phone">
                                    <!-- <input type="text" class="form-control" id="phone" value="{{$i->phone}}" wire:model="phone"> -->
                                </div>
                                <div class=" form-group">
                                    <label for="institusi">Institution</label>
                                    <input type="text" class="form-control" id="institusi" wire:model="institusi">
                                    <!-- <input type="text" class="form-control" id="institusi" value="{{$i->institusi}}" wire:model="institusi"> -->
                                </div>
                                <div class="form-group">
                                    <label for="accomodation">Accomodation</label>
                                    <select class="form-control" id="accomodation" wire:model="accomodation">
                                        <!-- <select class="form-control" id="accomodation" value="{{$i->accomodation}}" wire:model="accomodation"> -->
                                        <option></option>
                                        <option>Superior Garden View (IDR 900.000/night)</option>
                                        <option>Deluxe Superior Room (IDR 1.000.000/night)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Update
                                </button>
                            </span>
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                <button wire:click="closeModalPopover()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Close
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
                @empty
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="">
                            <div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Full Name</label>
                                    <input type="text" class="form-control" id="nama_lengkap" wire:model="nama_lengkap">
                                    <small> Name with titles for Certificate </small>
                                </div>
                                <div class="form-group">
                                    <label for="profession">Profession</label>
                                    <select class="form-control" id="profession" wire:model="profession">
                                        <option></option>
                                        <option>(PIT PAMKI - 3rg GHI) Foreign Consultant</option>
                                        <option>(PIT PAMKI - 3rg GHI) Foreign Resident/Trainee</option>
                                        <option>(PIT PAMKI - 3rg GHI) Local Specialist</option>
                                        <option>(PIT PAMKI - 3rg GHI) Local Resident/Student</option>
                                        <option>(PIT PAMKI - 3rg GHI) Local General Practitioner or Other Health Profession</option>
                                        <option>(3rd GHI Only) Participant</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="PAMKI">Are you a local Clinical Microbiologist or Resident? </label>
                                    <select class="form-control" id="PAMKI" wire:model="PAMKI">
                                        <option></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <small id="PAMKI" class="form-text text-muted">
                                        Clinical Microbiologist Specialist and Resident get 15% discount
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" wire:model="phone">
                                </div>
                                <div class=" form-group">
                                    <label for="institusi">Institution</label>
                                    <input type="text" class="form-control" id="institusi" wire:model="institusi">
                                </div>
                                <div class="form-group">
                                    <label for="accomodation">Accomodation</label>
                                    <select class="form-control" id="accomodation" wire:model="accomodation">
                                        <option></option>
                                        <option>Superior Garden View (IDR 900.000/night)</option>
                                        <option>Deluxe Superior Room (IDR 1.000.000/night)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Update
                                </button>
                            </span>
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                <button wire:click="closeModalPopover()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Close
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
                @endforelse
            </div>
        </div>
    </div>
</div>