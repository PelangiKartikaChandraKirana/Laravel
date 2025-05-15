<?php

namespace App\Filament\Resources;

//use App\Filament\Resources\LembagaResource\Api\Transformers\LembagaTransformer;
use App\Filament\Resources\LembagaResource\Pages;
use App\Filament\Resources\LembagaResource\RelationManagers;
use App\Models\Lembaga;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LembagaResource extends Resource
{
    protected static ?string $model = Lembaga::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Data Lembaga';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('nama_lembaga')
                ->required()
                ->maxLength(255),
            Forms\Components\FileUpload::make('gambar')
                ->image() // Hanya menerima file gambar
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('16:9') // Opsional: untuk memotong gambar
                ->imageResizeTargetWidth('1920') // Opsional: lebar maksimal
                ->imageResizeTargetHeight('1080') 
                ->maxSize(1024, 'mb') // Ukuran maksimal 1MB
                ->directory('lembaga') // Folder penyimpanan di storage/app/public
                ->disk('public') // Agar dapat diakses publik
                ->label('Foto Lembaga')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']), // Tipe file yang diterima
            Forms\Components\RichEditor::make('deskripsi')
                ->label('Deskripsi Lembaga'),
            Forms\Components\TextInput::make('range_harga')
                ->maxLength(255),
            Forms\Components\TextInput::make('durasi_kursus')
                ->maxLength(255),
            Forms\Components\TextInput::make('lokasi')
                ->maxLength(255),
            Forms\Components\TextInput::make('maps')
                ->maxLength(255),
            Forms\Components\TextInput::make('kontak')
                ->maxLength(255), // Hanya menerima file gambar

        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('nama_lembaga')
                ->searchable(),
            Tables\Columns\ImageColumn::make('gambar')
                ->label('Foto')
                ->square()
                ->size(40),
            Tables\Columns\TextColumn::make('deskripsi')
                ->limit(50),
            Tables\Columns\TextColumn::make('range_harga')
                ->searchable(),
            Tables\Columns\TextColumn::make('durasi_kursus')
                ->searchable(),
            Tables\Columns\TextColumn::make('lokasi')
                ->searchable(),
            Tables\Columns\TextColumn::make('maps')
                ->searchable(),
            Tables\Columns\TextColumn::make('kontak')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true), // Ukuran gambar
            
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListLembagas::route('/'),
            'create' => Pages\CreateLembaga::route('/create'),
            'edit' => Pages\EditLembaga::route('/{record}/edit'),
        ];
    }

    //public static function getApiTransformer()
    //{
       // return LembagaTransformer::class;
    //}
}
