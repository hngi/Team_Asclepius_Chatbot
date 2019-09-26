<?php

namespace App\Http\Controllers\ChatBot;

use App\Http\Controllers\Controller;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ChatBotController extends Controller {

    public function handle() {
        $botman = app('botman');

        $botman->hears('hi|hello|hey',function($bot)
        {
            $reply="nice to hear from you, I was created by team asclepius
                     you can ask me any question I am only a simple
                      bot so don't make it hard";
            $bot->reply($reply);
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
            $bot->reply("hng internship is a place to learn, meet new friends");
            $bot->reply(" if you are lucky enough and are skilled enough, you can make");
            $bot->reply(" you can make it to the final stages of the internship");
            $bot->reply(" you can also win great things along the way.");
        });


        $botman->hears('{message}', function($botman, $message) {

            if ($message == 'Are you real?') {
                $this->welcome($botman);
            } elseif ($message == 'What is your Name?') {
                $this->sayName($botman);
            } elseif ($message == 'How old are you?') {
                $this->sayOld($botman);
            } elseif ($message == 'Where do you live?') {
                $this->sayLive($botman);
            } 
            elseif ($message == 'How can you help me?') {
                $this->sayHelp($botman);
            } 
            
            elseif ($message == 'Which Languages do you speak?') {
                $this->sayLang($botman);
            } 
            
            elseif ($message == 'How are you?') {
                $this->sayHow($botman);
            } 
            
            elseif ($message == 'What time is it?') {
                $this->sayTime($botman);
            } 
            
            elseif ($message == 'What is my age?') {
                $this->sayAge($botman);
            } 
            else {
                $this->fallBack($botman);
            }
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function welcome($botman) {
        $botman->types();
        $botman->say('Yes, i am real but am a bot living in your computer', function($botman) {
            
        });
    }

    public function sayName($botman) {
        $botman->types();
        $botman->say('My Name is Asclepiusbot', function($botman) {
            
        });
    }

    public function sayOld($botman) {
        $botman->types();
        $botman->say('I am as old as the first computer', function($botman) {
            
        });
    }

    public function sayLive($botman) {
        $botman->types();
        $botman->say('In your Computer', function($botman) {
            
        });
    }
 public function sayHelp($botman) {
        $botman->types();
        $botman->say('Ask me any questions', function($botman) {
            
        });
    }

   public function sayLang($botman) {
        $botman->types();
        $botman->say('I can speak all languages, if you want me to.', function($botman) {
            
        });
    }  
      public function sayHow($botman) {
        $botman->types();
        $botman->say('Are you doing ok? Yes , I am fine and you?', function($botman) {
            
        });
    } 
    
    public function sayTime($botman) {
        $botman->types();
        $time = Carbon::now();
        $time2 = date("H:i:s:A",strtotime($time));
        $botman->say('The time is '.$time2, function($botman) {
            
        });
    } 
        public function sayAge($botman) {
        $botman->types();
        $botman->say('Your age is '.Auth::user()->age.' Years old', function($botman) {
            
        });
    } 
    
    public function fallBack($botman) {
        $botman->types();
        $botman->say('Sorry, My Boss didnt teach me this.', function($botman) {
            
        });
    }

    
//    public function askName($botman) {
//        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
//
//            $name = $answer->getText();
//
//            $this->say('Nice to meet you ' . $name);
//        });
//    }
}
