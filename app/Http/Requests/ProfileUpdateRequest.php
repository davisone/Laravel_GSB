<?php

// app/Http/Livewire/Profile/UpdateProfileInformationForm.php

use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;
use Livewire\Component;

class UpdateProfileInformationForm extends Component
{
    public $user;
    public $state = [
        'name' => '',
        'first_name' => '',
        'date_of_hire' => '',
        'postal_code' => '',
        'city' => '',
        'email' => '',
    ];

    
    public function mount(User $user)
    {
        $this->user = $user;
        $this->state = [
            'name' => $user->name,
            'first_name' => $user->first_name,
            'date_of_hire' => $user->date_of_hire,
            'postal_code' => $user->postal_code,
            'city' => $user->city,
            'email' => $user->email,
        ];
    }

    public function rules()
    {
        return (new ProfileUpdateRequest())->rules();
    }

    public function updateProfileInformation()
{
    $this->validate();

    $this->user->update($this->state);

    $this->emit('saved');

    $this->redirect(route('profile.show'));
}


    public function render()
    {
        return view('home');
    }

    
}
