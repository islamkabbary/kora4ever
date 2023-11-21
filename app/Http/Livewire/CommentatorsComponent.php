<?php

namespace App\Http\Livewire;

use App\Models\Commentator;
use Livewire\Component;
use Livewire\WithPagination;

class CommentatorsComponent extends Component
{
    public $commentator , $commentator_id;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'commentator' => 'required|max:25',
    ];


    public function render()
    {
        $commentators = Commentator::paginate(15);
        return view('livewire.commentators-component' , compact('commentators'));
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        if ($this->commentator_id) {
            $commentator = Commentator::find($this->commentator_id);
            $commentator->name = $this->commentator ;
            $commentator->save();
        }else{
            $commentator = new Commentator();
            $commentator->name = $this->commentator;
            $commentator->save();
        }
    }

    public function cleare()
    {
        $this->commentator = null ;
    }

    function edit($commentator_id)
    {
        $commentator = Commentator::find($commentator_id);
        $this->commentator_id = $commentator->id;
        $this->commentator = $commentator->name;
    }

    function delete($commentator_id)
    {
        Commentator::destroy($commentator_id);
    }
}
