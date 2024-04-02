<?php

namespace App\Livewire;

use App\Models\Support;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Resources extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search = "";

    public $name;
    public $email;
    public $message;

    public function mount()
    {
    }

    public function render()
    {

        if (!$this->search) {
            $supports = Support::paginate(5);
        } else {
            $supports = Support::where("title", "like", "%" . $this->search . "%")->paginate(5);
        }
        return view('livewire.resources', [
            "supports" => $supports
        ]);
    }

    public function sendMessage(Request $request)
    {

        $this->validate([
            'name' => 'required|max:250',
            'email' => 'required|max:250',
            'message' => 'required|max:250'
        ]);



         $this->dispatch('message',
         type: 'success',
         title: 'post liked',
         position: "center"
        );





        // dd($request->all());
    }
}
