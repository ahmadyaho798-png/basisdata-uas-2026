<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PasienResource\Pages;
use App\Filament\Admin\Resources\PasienResource\RelationManagers;
use App\Models\Pasien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('nama')
                ->required(),

            Forms\Components\TextInput::make('nik')
                ->required(),

            Forms\Components\Select::make('jenis_kelamin')
                ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ])
                ->required(),

            Forms\Components\DatePicker::make('tanggal_lahir')
                ->required(),

            Forms\Components\TextInput::make('alamat')
                ->required(),

            Forms\Components\TextInput::make('no_hp'),

            Forms\Components\Select::make('golongan_darah')
                ->options([
                    'A' => 'A',
                    'B' => 'B',
                    'AB' => 'AB',
                    'O' => 'O'
                ]),

            Forms\Components\FileUpload::make('upload_gambar')
                ->image()
                ->directory('pasien')
                ->disk('public'),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_rm')->searchable(),
                Tables\Columns\TextColumn::make('nik')->searchable(),
                Tables\Columns\TextColumn::make('nama')->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('tanggal_lahir')->date(),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('no_hp'),
                Tables\Columns\TextColumn::make('golongan_darah'),
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPasiens::route('/'),
            'create' => Pages\CreatePasien::route('/create'),
            'edit' => Pages\EditPasien::route('/{record}/edit'),
        ];
    }
}
