<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransporteResource\Pages;
use App\Filament\Resources\TransporteResource\RelationManagers;
use App\Models\Transporte;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransporteResource extends Resource
{
    protected static ?string $model = Transporte::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tipo_transporte')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('origen')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('destino')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('fecha_hora_salida')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('fecha_hora_llegada')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tarifa')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipo_transporte')
                    ->searchable(),
                Tables\Columns\TextColumn::make('origen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('destino')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_hora_salida')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_hora_llegada')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tarifa')
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
            'index' => Pages\ListTransportes::route('/'),
            'create' => Pages\CreateTransporte::route('/create'),
            'edit' => Pages\EditTransporte::route('/{record}/edit'),
        ];
    }    
}
