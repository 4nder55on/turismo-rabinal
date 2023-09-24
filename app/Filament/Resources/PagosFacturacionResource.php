<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PagosFacturacionResource\Pages;
use App\Filament\Resources\PagosFacturacionResource\RelationManagers;
use App\Models\PagosFacturacion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PagosFacturacionResource extends Resource
{
    protected static ?string $model = PagosFacturacion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('reserva_id')
                    ->relationship('reserva', 'id')
                    ->required(),
                Forms\Components\TextInput::make('monto')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tipo_pago')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reserva.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('monto')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipo_pago')
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
            'index' => Pages\ListPagosFacturacions::route('/'),
            'create' => Pages\CreatePagosFacturacion::route('/create'),
            'edit' => Pages\EditPagosFacturacion::route('/{record}/edit'),
        ];
    }    
}
