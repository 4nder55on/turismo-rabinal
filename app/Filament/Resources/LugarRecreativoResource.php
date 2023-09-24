<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LugarRecreativoResource\Pages;
use App\Filament\Resources\LugarRecreativoResource\RelationManagers;
use App\Models\LugarRecreativo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LugarRecreativoResource extends Resource
{
    protected static ?string $model = LugarRecreativo::class;

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
                Forms\Components\TextInput::make('tipo_lugar')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ubicacion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('horario')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('precio')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('facilidades')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('actividades')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('atracciones_destacadas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('calificacion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contacto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('temporada_alta')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('temporada_baja')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('accessibilidad')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('restricciones_edad')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('eventos_especiales')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('regulaciones')
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
                Tables\Columns\TextColumn::make('tipo_lugar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ubicacion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('horario')
                    ->searchable(),
                Tables\Columns\TextColumn::make('precio')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('facilidades')
                    ->searchable(),
                Tables\Columns\TextColumn::make('actividades')
                    ->searchable(),
                Tables\Columns\TextColumn::make('atracciones_destacadas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('calificacion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contacto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('temporada_alta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('temporada_baja')
                    ->searchable(),
                Tables\Columns\TextColumn::make('accessibilidad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('restricciones_edad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('eventos_especiales')
                    ->searchable(),
                Tables\Columns\TextColumn::make('regulaciones')
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
            'index' => Pages\ListLugarRecreativos::route('/'),
            'create' => Pages\CreateLugarRecreativo::route('/create'),
            'edit' => Pages\EditLugarRecreativo::route('/{record}/edit'),
        ];
    }    
}
