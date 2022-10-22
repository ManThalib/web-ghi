<?php

namespace App\Http\Livewire\Upload;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\Authenticatable;

class Index extends Component
{
    public $uploads, $user_id, $fileTitle, $fileName;
    use WithFileUploads;

    public function submit()
    {

        $this->validate([
            'fileTitle' => 'required',
            'fileName' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048', // 2MB Max
        ]);

        $sluggedfileTitle = Str::slug($this->fileTitle);
        $sluggedName = Str::slug(auth()->user()->name);
        $string = str($sluggedfileTitle)->append($sluggedName);
        // $adjusted = Str::slug($string);
        $finish = Str::finish($string, '.png');

        Upload::create([
            'user_id' => auth()->id(),
            'fileTitle' => $this->fileTitle,
            'slug' => $finish,
            'fileName' => $this->fileName->storeAs('public/uploads', $finish),
        ]);

        session()->flash('message', 'File uploaded.');
    }

    public function render()
    {
        $this->upload = Upload::whereUserId(Auth::id())->get();
        return view('livewire.user.upload.index');
    }

    public function delete($id)
    {
        Upload::find($id)->delete();
        session()->flash('message', 'Images Deleted Successfully.');
    }
}
