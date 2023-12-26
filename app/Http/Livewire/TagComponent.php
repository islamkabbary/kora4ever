<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TagComponent extends Component
{
    use LivewireAlert;
    public $name, $tag_id;

    protected $rules = [
        'name' => 'required',
    ];

    public function render()
    {
        return view('livewire.tag-component');
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        if ($this->tag_id) {
            $tag = Tag::find($this->tag_id);
        } else {
            $tag = new Tag();
        }
        $tag->name = $this->name;
        $tag->save();
        $this->alert('success', "successfully");
        $this->clear();
    }

    public function clear()
    {
        $this->name = null;
    }

    public function edit($tag_id)
    {
        $tag = Tag::find($tag_id);
        $this->tag_id = $tag->id;
        $this->name = $tag->name;
    }

    function delete($tag_id)
    {
        Tag::destroy($tag_id);
        $this->alert('success', "deleted");
    }
}
