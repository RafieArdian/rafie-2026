<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Filament\Admin\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function canCreate(): bool
    {
        return static::getModel()::count() === 0;
    }

    public static function form(Form $form): Form
    {
         return $form
        ->schema([
            Forms\Components\Section::make('Profile')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required(),

                    Forms\Components\TextInput::make('title')
                        ->required(),

                    Forms\Components\Textarea::make('about')
                        ->rows(5)
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Forms\Components\Section::make('Media')
                ->schema([
                    Forms\Components\FileUpload::make('photo')
                        ->image()
                        ->directory('profiles'),

                    Forms\Components\FileUpload::make('cv')
                        ->directory('cv'),
                ])
                ->columns(2),

            Forms\Components\Section::make('Social')
                ->schema([
                    Forms\Components\TextInput::make('email')
                        ->email(),

                    Forms\Components\TextInput::make('linkedin')
                        ->url(),

                    Forms\Components\TextInput::make('github')
                        ->url(),
                ])
                ->columns(3),
        ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\ImageColumn::make('photo')
                ->circular(),

            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->limit(40),

            Tables\Columns\TextColumn::make('email')
                ->copyable(),

            Tables\Columns\TextColumn::make('github')
                ->url(fn ($record) => $record->github)
                ->openUrlInNewTab()
                ->limit(20),

            Tables\Columns\TextColumn::make('created_at')
                ->date('d M Y'),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
