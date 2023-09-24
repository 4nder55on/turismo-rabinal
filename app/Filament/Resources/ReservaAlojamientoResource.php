<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservaAlojamientoResource\Pages;
use App\Filament\Resources\ReservaAlojamientoResource\RelationManagers;
use App\Models\ReservaAlojamiento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservaAlojamientoResource extends Resource
{
    protected static ?string $model = ReservaAlojamiento::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cliente_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('hotel_id')
                    ->tel()
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('fecha_entrada')
                    ->required(),
                Forms\Components\DatePicker::make('fecha_salida')
                    ->required(),
                Forms\Components\TextInput::make('tipo_habitacion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('precio_habitacion')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('estado_pago')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cliente_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hotel_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_entrada')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_salida')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipo_habitacion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('precio_habitacion')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado_pago')
                    ->searchable(),
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
            'index' => Pages\ListReservaAlojamientos::route('/'),
            'create' => Pages\CreateReservaAlojamiento::route('/create'),
            'edit' => Pages\EditReservaAlojamiento::route('/{record}/edit'),
        ];
    }    
}
