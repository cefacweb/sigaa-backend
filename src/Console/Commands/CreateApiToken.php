<?php

namespace Src\Console\Commands;

use Illuminate\Console\Command;
use Src\Domain\Entities\AccessControl\User;

class CreateApiToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sigaa:create-api-token {user_id} {token_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add API token to user';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userId = $this->argument('user_id');
        $tokenName = $this->argument('token_name');

        $user = User::find($userId);
        $tokenPlainText = $user->createToken($tokenName)->plainTextToken;

        $this->info("Token ${tokenName} created! ${tokenPlainText}");
    }
}
