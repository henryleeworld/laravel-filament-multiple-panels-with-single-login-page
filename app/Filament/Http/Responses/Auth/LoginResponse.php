<?php

namespace App\Filament\Http\Responses\Auth;

use Filament\Http\Responses\Auth\LoginResponse as BaseLoginResponse;
use Filament\Pages\Dashboard;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class LoginResponse extends BaseLoginResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        if (auth()->user()->is_admin) {
            return redirect()->to(Dashboard::getUrl(panel: 'admin'));
        }
 
        return parent::toResponse($request);
    }
}
