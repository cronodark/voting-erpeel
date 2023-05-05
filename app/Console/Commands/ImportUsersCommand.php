<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportUsersCommand extends Command
{
    protected $signature = 'import:users {file}';
    protected $description = 'Import users from CSV file';

    public function handle()
    {
        $csvPath = storage_path('app/csv/' . $this->argument('file'));

        if (!file_exists($csvPath)) {
            $this->error('File not found.');
            return;
        }

        if (($handle = fopen($csvPath, "r")) !== false) {
            while ($row = fgetcsv($handle)) {
                $data = [
                    'id' => intval($row[0]), // convert ID to integer
                    'username' => $row[1],
                    'password' => bcrypt($row[2]),
                    'role' => $row[3],
                ];

                DB::table('users')->insert($data);
            }

            fclose($handle);
            $this->info('Import completed.');
        } else {
            $this->error('Failed to open file.');
        }
    }
}
