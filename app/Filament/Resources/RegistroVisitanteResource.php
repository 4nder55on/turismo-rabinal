<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistroVisitanteResource\Pages;
use App\Filament\Resources\RegistroVisitanteResource\RelationManagers;
use App\Models\RegistroVisitante;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistroVisitanteResource extends Resource
{
    protected static ?string $model = RegistroVisitante::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cliente_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lugar')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('fecha')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hora_entrada')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hora_salida')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tipo_visita')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('costo_total')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('servicios_utilizados')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('observaciones')
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
                Tables\Columns\TextColumn::make('lugar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hora_entrada')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hora_salida')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo_visita')
                    ->searchable(),
                Tables\Columns\TextColumn::make('costo_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('servicios_utilizados')
                    ->searchable(),
                Tables\Columns\TextColumn::make('observaciones')
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
            'index' => Pages\ListRegistroVisitantes::route('/'),
            'create' => Pages\CreateRegistroVisitante::route('/create'),
            'edit' => Pages\EditRegistroVisitante::route('/{record}/edit'),
        ];
    }    
}
