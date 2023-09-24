<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuiasToursResource\Pages;
use App\Filament\Resources\GuiasToursResource\RelationManagers;
use App\Models\GuiasTours;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuiasToursResource extends Resource
{
    protected static ?string $model = GuiasTours::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('guia_id')
                    ->relationship('guia', 'id')
                    ->required(),
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_inicio')
                    ->required(),
                Forms\Components\TextInput::make('duracion')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('precio')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('informacion_contacto')
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
                Tables\Columns\TextColumn::make('guia.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_inicio')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duracion')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('precio')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('informacion_contacto')
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
            'index' => Pages\ListGuiasTours::route('/'),
            'create' => Pages\CreateGuiasTours::route('/create'),
            'edit' => Pages\EditGuiasTours::route('/{record}/edit'),
        ];
    }    
}
