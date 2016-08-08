<?php
namespace App\Console\Commands;
use App\Article;
use Evernote\Auth\OauthHandler;
use Evernote\Client;
use Illuminate\Console\Command;
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/8/3
 * Time: 下午10:35
 */
class EverNote extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'evernote';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $token = 'S=s231:U=1bbe0a0:E=15da8ba97dc:C=15651096b38:P=1cd:A=en-devtoken:V=2:H=80c471f9dabc45f4374494afc9c866dd';
        $client = new Client($token, false);
        //$data = $client->findNotesWithSearch('Modern PHP');
        $note = $client->getNote('0da7297b-68f7-41f9-8f15-e56de37fb438');
        var_dump('success');
        $article = new Article([
            'unique_id' => sha1(md5(uniqid()).'PeiYanYiSheng'),
            'title' => $note->getTitle(),
            'content' => $note->getContent(),
        ]);
        $article->save();
    }

}