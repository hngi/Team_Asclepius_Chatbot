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

        $botman->hears('hi|hello|hey',function($bot)
        {
            $this->askName($bot);
        });
        //this will use swtich case , for now is for testing
        $botman->hears('What Your Name ?', function ($bot) {
            $bot->reply('My Name is Asclepius bot');
        });

        $botman->hears('.*team asclepius.*',function($bot)
        {
            $bot->reply('Team Asclepius is one of the teams in stage 3 of HNG Internship 6.0');
        });

        $botman->hears('Ok', function ($bot) {
            $bot->reply('Glad I could be of help');
        });

        
        $botman->hears('Why Am I Here', function ($bot) {
            $bot->reply('You are here because of HNG 6.0 Internship');
        });
        $botman->hears('.*(hng.* internship).*',function($bot) //using regular expressions
        {
            $bot->reply("hng internship is a place to learn");
        });

        $botman->fallback(function($bot)
        {
            $bot->reply("sorry I do not understand you would you mind rephrasing");

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
