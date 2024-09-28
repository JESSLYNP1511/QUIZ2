<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasukResource\Pages;
use App\Filament\Resources\MasukResource\RelationManagers;
use App\Models\Masuk;
use App\Models\Supplier; 
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MasukResource extends Resource
{
    protected static ?string $model = Masuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_masuk')
                    ->label('Kode Masuk')
                    ->required()
                    ->maxLength(10),
                
                Forms\Components\DatePicker::make('tanggal_masuk')
                    ->label('Tanggal Masuk')
                    ->required(),

                Forms\Components\TextInput::make('kode_admin')
                    ->label('Kode Admin')
                    ->required()
                    ->maxLength(10),

                Forms\Components\Select::make('kode_supplier')
                    ->label('Kode Supplier')
                    ->required()
                    ->options(Supplier::all()->pluck('kode_supplier', 'kode_supplier')) 
                    ->searchable(),

                Forms\Components\TextInput::make('total_masuk')
                    ->label('Total Masuk')
                    ->required()
                    ->numeric()
                    ->maxLength(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_admin')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kode_supplier')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('total_masuk')->sortable()->searchable(),
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
            'index' => Pages\ListMasuks::route('/'),
            'create' => Pages\CreateMasuk::route('/create'),
            'edit' => Pages\EditMasuk::route('/{record}/edit'),
        ];
    }
}
