<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LugaresArqueologicosResource\Pages;
use App\Filament\Resources\LugaresArqueologicosResource\RelationManagers;
use App\Models\LugaresArqueologicos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LugaresArqueologicosResource extends Resource
{
    protected static ?string $model = LugaresArqueologicos::class;

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
                Forms\Components\TextInput::make('periodo_historico')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tipo_sitio')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('estructuras_destacadas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hallazgos_destacados')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('importancia_cultural')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('restricciones')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('accesibilidad')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('horario_visita')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('costo_entrada')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contacto')
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
                Tables\Columns\TextColumn::make('periodo_historico')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo_sitio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estructuras_destacadas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hallazgos_destacados')
                    ->searchable(),
                Tables\Columns\TextColumn::make('importancia_cultural')
                    ->searchable(),
                Tables\Columns\TextColumn::make('restricciones')
                    ->searchable(),
                Tables\Columns\TextColumn::make('accesibilidad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('horario_visita')
                    ->searchable(),
                Tables\Columns\TextColumn::make('costo_entrada')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contacto')
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
            'index' => Pages\ListLugaresArqueologicos::route('/'),
            'create' => Pages\CreateLugaresArqueologicos::route('/create'),
            'edit' => Pages\EditLugaresArqueologicos::route('/{record}/edit'),
        ];
    }    
}
