<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KunjunganResource\Pages;
use App\Filament\Admin\Resources\KunjunganResource\RelationManagers;
use App\Models\Kunjungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KunjunganResource extends Resource
{
    protected static ?string $model = Kunjungan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                // NAMA PASIEN KETIK SENDIRI
                Forms\Components\TextInput::make('nama_pasien')
                    ->label('Nama Pasien')
                    ->required(),

                // Dokter masih boleh pilih
                Forms\Components\Select::make('dokter_id')
                    ->relationship('dokter', 'nama')
                    ->required(),

                Forms\Components\DatePicker::make('tanggal_kunjungan')
                    ->required(),

                Forms\Components\TextInput::make('keluhan')
                    ->required(),

                Forms\Components\FileUpload::make('upload_gambar')
                    ->image()
                    ->directory('kunjungan')
                    ->disk('public'),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('nama_pasien')
                    ->label('Pasien')
                    ->searchable(),

                Tables\Columns\TextColumn::make('dokter.nama')
                    ->label('Dokter')
                    ->searchable(),

                Tables\Columns\TextColumn::make('tanggal_kunjungan')
                    ->date(),

                Tables\Columns\TextColumn::make('keluhan')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('upload_gambar')
                    ->disk('public'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListKunjungans::route('/'),
            'create' => Pages\CreateKunjungan::route('/create'),
            'edit' => Pages\EditKunjungan::route('/{record}/edit'),
        ];
    }
}
