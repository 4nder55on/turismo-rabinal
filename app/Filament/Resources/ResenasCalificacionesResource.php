<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResenasCalificacionesResource\Pages;
use App\Filament\Resources\ResenasCalificacionesResource\RelationManagers;
use App\Models\ResenasCalificaciones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResenasCalificacionesResource extends Resource
{
    protected static ?string $model = ResenasCalificaciones::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lugar_id')
                    ->relationship('lugar', 'id')
                    ->required(),
                Forms\Components\Select::make('usuario_id')
                    ->relationship('usuario', 'name')
                    ->required(),
                Forms\Components\TextInput::make('resena')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('calificacion')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lugar.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('usuario.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('resena')
                    ->searchable(),
                Tables\Columns\TextColumn::make('calificacion')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListResenasCalificaciones::route('/'),
            'create' => Pages\CreateResenasCalificaciones::route('/create'),
            'edit' => Pages\EditResenasCalificaciones::route('/{record}/edit'),
        ];
    }    
}
