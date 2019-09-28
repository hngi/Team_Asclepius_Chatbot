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


        $botman->hears('{message}', function($botman, $message) {
            $message=strtolower($message); //so we can try to match only for when in lower case

            if(preg_match("/hello|hey/", $message,$match))
            {
                $reply="$match[0], nice to hear from you, I am Asclepiusbot and I was created by
                     team asclepius you can ask me any question I am only a simple
                      bot so don't make it hard";
                $botman->reply($reply);
            }
            elseif (preg_match("/team asclepius/",$message))
            {                 
                $reply="Team Asclepius is one of the teams in stage 3 of HNG Internship, the
                team members are all great, I hope they all make it to stage 4";
                $botman->reply($reply);
            }
            elseif (preg_match("/hng.*internship/",$message,$match))
            {
                $botman->reply("hng internship is a place to learn, meet new friends");
                $botman->reply(" if you are lucky enough and are skilled enough, you can make");
                $botman->reply(" it to the final stages of the internship");
                $botman->reply(" you can also win great things along the way.");                                
            }
            elseif ($message == 'are you real?') {
                $this->welcome($botman);
            } elseif ($message == 'what is your name?') {
                $this->sayName($botman);
            } elseif ($message == 'how old are you?') {
                $this->sayOld($botman);
            } elseif ($message == 'where do you live?') {
                $this->sayLive($botman);
            } 
            elseif ($message == 'how can you help me?') {
                $this->sayHelp($botman);
            } 
            
            elseif ($message == 'which languages do you speak?') {
                $this->sayLang($botman);
            } 
            
            elseif ($message == 'how are you?') {
                $this->sayHow($botman);
            } 
            
            elseif ($message == 'what time is it?') {
                $this->sayTime($botman);
            } 
            
            elseif ($message == 'what is my age?') {
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
        $botman->say('In a strange land, filled with circuits and 
            where everything is processed as either 1 or 0', function($botman) {
            
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
        $botman->say('Sorry, I do not understand you, if you don\'t know what to ask,
            you can ask me about me and what I do', function($botman) {
            
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
