<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EncargadosResource\Pages;
use App\Filament\Resources\EncargadosResource\RelationManagers;
use App\Models\Encargados;
use App\Models\LugarRecreativo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EncargadosResource extends Resource
{
    protected static ?string $model = Encargados::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lugar_id')
                    ->label('Lugar Asignado')
                    ->options(LugarRecreativo::all()->pluck('nombre', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('apellido')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('direccion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_nacimiento')
                    ->required(),
                Forms\Components\DatePicker::make('fecha_ingreso')
                    ->required(),
                Forms\Components\TextInput::make('horario_trabajo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sueldo')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('estado')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lugarRecreativo.nombre')
                    ->label('Lugar Asignado')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direccion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_ingreso')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('horario_trabajo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sueldo')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado')
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
            RelationManagers\LugarRecreativoRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEncargados::route('/'),
            'create' => Pages\CreateEncargados::route('/create'),
            'edit' => Pages\EditEncargados::route('/{record}/edit'),
        ];
    }
}
