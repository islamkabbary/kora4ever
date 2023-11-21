<?php

namespace App\Http\Livewire;

use App\Models\Channel;
use Livewire\Component;
use Livewire\WithPagination;

class ChannelComponent extends Component
{

    public $channel;
    public $channel_id;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $rules = [
        'channel' => 'required|max:25',
    ];

    public function render()
    {
        $channels = Channel::paginate(15);
        return view('livewire.channel-component' , compact('channels'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        if ($this->channel_id) {
            $channel = Channel::find($this->channel_id);
        }else{
            $channel = new Channel();
        }
        $channel->name = $this->channel ;
        $channel->save();
        $this->cleare();
    }

    public function cleare()
    {
        $this->channel = null ;
    }

    function edit($channel_id)
    {
        $channel = Channel::find($channel_id);
        $this->channel_id = $channel->id;
        $this->channel = $channel->name;
    }

    function delete($channel_id)
    {
        Channel::destroy($channel_id);
    }
}
