<?php

/*
    protected $listeners = ['file_attachment'];

    public function file_attachment($attachment)
    {
        $this->url = $attachment;
    }

    foreach:
    $obj->url = storeFile('folder_location',$this->url);

    -- wheren clear or reset
    $this->url = null;
    $this->emit('remove_files_emit');

    -- in blade
    <div>
        <livewire:multiple-media-upload-component types="png,JPEG,PDF,RAR,ZIP,DOCS" title="{{__('messages.Attachment')}}"
                                                fileTypes="image/*" emitFunction="file_attachment" />
    </div>
*/

namespace App\Http\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultipleMediaUploadComponent extends Component
{
    use WithFileUploads;
    // use LivewireAlert;
    public $title;
    public $name = "photos";
    public $types;
    public $fileTypes;
    public $photos = [];
    public $oldPhotos = [];
    public $image = true;
    public $multiple;
    public $onPhotosSelected;
    public $emitFunction;
    public $previewsEmit;
    public $preview = [];
    public $max = 10;
    public function render()
    {
        // dd($this->preview);
        return view('livewire.multiple-media-upload-component');
    }
    protected function getListeners()
    {
        return [
            $this->onPhotosSelected => 'photoSelectionChanged',
            $this->previewsEmit => 'previewsEmit',
            'remove_files_emit'
        ];
    }
    public function remove_files_emit()
    {
        $this->photos = [];
        $this->photoSelectionChanged();
    }
    public function removePhoto($key)
    {
        unset($this->photos[$key]);
        $this->photos = array_values($this->photos);
        $this->photoSelectionChanged();
    }

    public function hydrate()
    {
        //
        $this->oldPhotos = $this->photos;
    }

    public function updatedPhotos($value){

        $this->photos = array_merge($this->oldPhotos, $this->photos);

        if( count($this->photos) > $this->max){
            $this->alert('warning', "", [
                'position'  =>  'center',
                'text' => __("Maximum of")." ".$this->max." ".__("is allowed"),
                'toast'  =>  false,
            ]);
            $this->photos = array_slice($this->photos, 0, $this->max);
        }

        $this->photoSelectionChanged();
    }

    public function photoSelectionChanged()
    {
        $photoPaths = [];
        foreach ($this->photos as $photo) {
            $photoPath = $photo->getRealPath();
            $photoPaths[$photo->getMimeType()][] = $photoPath;
        }
        $this->emitUp($this->emitFunction, $photoPaths);
    }

    public function previewsEmit($preview)
    {
        $this->preview = $preview;
    }
}
