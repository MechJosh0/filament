<?php

namespace Filament\Tests\Admin\Fixtures\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static string $view = 'admin.fixtures.pages.settings';

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?int $navigationSort = 2;

    public $name;

    public function notificationManager(bool $redirect = false)
    {
        if ($redirect) {
            $this->redirect('/');
        }

        $this->notify('success', 'Saved!');
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->required(),
        ];
    }

    public function save()
    {
        $this->form->getState();
    }
}
