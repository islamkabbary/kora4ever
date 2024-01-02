<?php

namespace App\Http\Livewire;

use App\Models\Team;
use App\Models\Matche;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateMatcheComponent extends Component
{
    use WithFileUploads, LivewireAlert;

    public $team1;
    public $team2;
    public $match_url;
    public $url_type;
    public $status;
    public $result_team1;
    public $result_team2;
    public $time;
    public $date;
    public $championship_id;
    public $commentator_id;
    public $channel_id;
    public $match_id;

    protected $rules = [
        'team1' => 'required|exists:teams,id',
        'team2' => 'required|exists:teams,id',
        'status' => 'nullable|in:fisrt half,end fisrt half,secound half,extra time 1,extra time 2,start soon,end',
        'championship_id' => 'required|exists:championships,id',
        'commentator_id' => 'nullable|exists:commentators,id',
        'channel_id' => 'nullable|exists:channels,id',
        'time' => 'required',
        'date' => 'date|required',
        // 'url_type' => 'required_with:match_url',
    ];


    public function render()
    {
        if ($this->championship_id) {
            $teams = Team::whereHas('leauges', function ($q) {
                $q->where('championship_id', $this->championship_id);
            })->get();
        } else {
            $teams = null;
        }
        return view('livewire.create-matche-component', ['teams' => $teams]);
    }

    public function save()
    {
        $this->validate();
        if ($this->match_id) {
            $today = Matche::find($this->match_id);
            $today->team1 = $this->team1;
            $today->team2 = $this->team2;
            $today->channel_id = $this->channel_id;
            $today->championship_id = $this->championship_id;
            $today->commentator_id = $this->commentator_id;
            $today->result_team1 = $this->result_team1 ?  $this->result_team1 : 0;
            $today->result_team2 = $this->result_team2 ? $this->result_team2 : 0;
            $today->match_url = $this->match_url;
            $today->time = $this->time;
            $today->date = $this->date;
            $today->url_type = $this->url_type;
            $today->status = $this->status;
            $today->save();
            $this->alert('success', "successfully updated");
            $this->clear();
        } else {
            $today = new Matche();
            $today->team1 = $this->team1;
            $today->team2 = $this->team2;
            $today->championship_id = $this->championship_id;
            $today->channel_id = $this->channel_id;
            $today->commentator_id = $this->commentator_id;
            $today->result_team1 = $this->result_team1 ?  $this->result_team1 : 0;
            $today->result_team2 = $this->result_team2 ? $this->result_team2 : 0;
            $today->match_url = $this->match_url;
            $today->time = $this->time;
            $today->date = $this->date;
            $today->status = $this->status;
            $today->url_type = $this->url_type;
            $today->save();
            $this->alert('success', "successfully added");
            $this->clear();
        }
    }

    public function clear()
    {
        $this->team1 = null;
        $this->team2 = null;
        $this->channel_id = null;
        $this->championship_id = null;
        $this->commentator_id = null;
        $this->result_team1 = null;
        $this->result_team2 = null;
        $this->match_url = null;
        $this->url_type = null;
        $this->time = null;
        $this->status = null;
        $this->date = null;
    }

    function edit($match_id)
    {
        $today = Matche::find($match_id);
        $this->match_id = $today->id;
        $this->team1 = $today->team1;
        $this->team2 = $today->team2;
        $this->channel_id = $today->channel_id;
        $this->championship_id = $today->championship_id;
        $this->commentator_id = $today->commentator_id;
        $this->result_team1 = $today->result_team2;
        $this->result_team1 = $today->result_team2;
        $this->match_url = $today->match_url;
        $this->url_type = $today->url_type;
        $this->time = $today->time;
        $this->status = $today->status;
        $this->date = $today->date;
    }

    function delete($match_id)
    {
        Matche::destroy($match_id);
        $this->alert('success', "successfully deleted");
    }
}
