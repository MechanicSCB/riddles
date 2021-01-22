<?php

use Illuminate\Support\Facades\DB;

function insertChunkedArrayToDb(array $arrayToChunk, string $tableName, int $chunkBy = 70)
{
    $chunkedArray = collect($arrayToChunk)->chunk($chunkBy)->toArray();

    foreach ($chunkedArray as $array){
        DB::table($tableName)->insert($array);
    }

}

function clearDbTable(string $tableName)
{
    switch(DB::getDriverName()) {
        case 'mysql':
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            break;
        case 'sqlite':
            DB::statement('PRAGMA foreign_keys = OFF');
            break;
    }
    DB::table($tableName)->truncate();

//        Schema::disableForeignKeyConstraints();
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
//        Schema::enableForeignKeyConstraints();

}
