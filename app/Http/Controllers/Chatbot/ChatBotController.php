<?php

namespace App\Http\Controllers\ChatBot;

use App\Http\Controllers\Controller;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

class ChatBotController extends Controller {

    public function handle() {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {

            if ($message == 'hi') {
                $this->askName($botman);
            }
        });
        //this will use swtich case , for now is for testing
        $botman->hears('What Your Name ?', function ($bot) {
            $bot->reply('My Name is Team Asclepius');
        });
        $botman->hears('Ok', function ($bot) {
            $bot->reply('You are Welcome');
        });

        $botman->hears('Why Am I Here', function ($bot) {
            $bot->reply('You are here because of HNG 6.0 Internship');
        });


        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman) {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }

}
