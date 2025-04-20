<?php

namespace App\Livewire\User\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $name, $email, $phone, $country, $state, $city, $business, $business_name, $business_type, $business_reg_no, $image;
    
    public $countries = ["Nigeria", "Ghana", "United States", "United Kingdom", "Canada", "Australia"];

    protected $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|string',
        'country' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'business_name' => 'required_if:business,true|string|max:255',
        'business_type' => 'required_if:business,true|string|max:255',
        'business_reg_no' => 'required_if:business,true|string|max:255',
    ];

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;

        $this->business = Auth::user()->account_type == 'business' ? true : false;

        $this->business_name = $user->business_name;
        $this->business_type = $user->business_type;
        $this->business_reg_no = $user->business_reg_no;

        $this->country = $user->county;
        $this->state = $user->state;
        $this->city = $user->city;
    }


    public function update()
    {
        $validated = $this->validate();
        $validated['account_type'] = $this->business ? 'business' : 'personal';
        $user = User::find(Auth::id());
        $user->update($validated);
        return $this->redirectRoute('profile.index');
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);

        $path = $this->image->store('profile', 'public');
        $user = User::find(Auth::id());
        $user->update([
            'image' => $path
        ]);
        return $this->redirectRoute('profile.edit');
    }

    public function render()
    {
        return view('livewire.user.profile.edit');
    }
}
