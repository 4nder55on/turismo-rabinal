<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HospedajeResource\Pages;
use App\Filament\Resources\HospedajeResource\RelationManagers;
use App\Models\Hospedaje;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HospedajeResource extends Resource
{
    protected static ?string $model = Hospedaje::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cliente_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('fecha_entrada')
                    ->required(),
                Forms\Components\DatePicker::make('fecha_salida')
                    ->required(),
                Forms\Components\TextInput::make('numero_personas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('precio_total')
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
                Tables\Columns\TextColumn::make('fecha_entrada')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_salida')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('numero_personas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('precio_total')
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
            'index' => Pages\ListHospedajes::route('/'),
            'create' => Pages\CreateHospedaje::route('/create'),
            'edit' => Pages\EditHospedaje::route('/{record}/edit'),
        ];
    }    
}
