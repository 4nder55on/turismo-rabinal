<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Filament\Resources\HotelResource\RelationManagers;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ubicacion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('clasificacion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tipo_habitacion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('precio_habitacion')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('facilidad_servicios')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('politicas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contacto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Disponibilidad')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('eventos_especiales')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_url')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ubicacion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('clasificacion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo_habitacion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('precio_habitacion')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('facilidad_servicios')
                    ->searchable(),
                Tables\Columns\TextColumn::make('politicas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contacto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Disponibilidad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('eventos_especiales')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_url'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }    
}
