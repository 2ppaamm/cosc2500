<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Questions;

class QuestionsTableSeeder extends Seeder {

    public function run()
    {
        $question = Questions::create([
            'Question' => 'Do you often refrain from doing something because you are afraid of it being illegal?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'Are you often afraid of new or unexpected situations?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'Is it difficult for you to telephone someone you do not know?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'Do you prefer not to ask for something when you are not sure you will obtain it?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'Do you often renounce your rights when you know you can avoid a quarrel with a person or an organization?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'As a child were you troubled by punishments at home or in school?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'In tasks that you are not prepared for, do you attach great importance to then possibility of failure?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'Are you easily discouraged in difficult situations?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'Are you a shy person?',
            'Type' => 'sp',
        ]);
        $question = Questions::create([
            'Question' => 'Whenever possible, do you avoid demonstrating your skills for fear of being embarrassed?',
            'Type' => 'sp',
        ]);

        $question = Questions::create([
           'Question' => 'Does the good prospect of obtaining money motivate you strongly to do some things?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Are you frequently encouraged to act by the possibility of being valued in your work, in your studies, with your friends or with your family?',
            'Type' => 'sr'
        ]);
        $question = Questions::create([
            'Question' => 'When you are in a group, do you try to make your opinions the most intelligent or the funniest?',
            'Type' => 'sr'
        ]);
        $question = Questions::create([
            'Question' => 'Do you need people to show their affection for you all the time?',
            'Type' => 'sr'
        ]);
        $question = Questions::create([
            'Question' => 'Do you spend a lot of your time on obtaining a good image?',
            'Type' => 'sr'
        ]);
        $question = Questions::create([
            'Question' => 'Do you often do things to be praised?',
            'Type' => 'sr'
        ]);
        $question = Questions::create([
            'Question' => 'Do you like being the centre of attention at a party or social meeting?',
            'Type' => 'sr'
        ]);
        $question = Questions::create([
            'Question' => 'Do you like to take some drugs because of the pleasure you get from them?',
            'Type' => 'sr'
        ]);
        $question = Questions::create([
            'Question' => 'Do you often meet people that you find physically attractive?',
            'Type' => 'sr'
        ]);
        $question = Questions::create([
            'Question' => 'Do you often take the opportunity to pick up people you find attractive?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'When you are in a group, do you have difficulties selecting a good topic to talk about?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'As a child, did you do a lot of things to get people’s approval',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Is it often difficult for you to fall asleep when you think about things you have done or must do?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Does the possibility of social advancement move you to action, even if this involves not playing fair?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Do you think a lot before complaining in a restaurant if your meal if not well prepared?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Do you generally give preference to those activities that imply an immediate gain?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Would you be bothered if you had to return to a store when you noticed you were given the wrong change?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Do you often have trouble resisting the temptation of doing forbidden things?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Whenever you can, do you avoid going to unknown places?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Do you like to compete and do everything you can to win?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Are you often worried by things that you said or did?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Is it easy for you to associate tastes and smells to very pleasant events?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Would it be difficult for you to ask your boss for a raise (salary increase)?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Are there a large number of objects or sensations that remind you of pleasant events?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Do you generally try to avoid speaking in public?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'When you start to play a poker machine, is it often difficult for you to stop?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Do you, on a regular basis, think that you could do more things if it was not for your insecurity or fear?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Do you sometimes do things for quick gains?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Comparing yourself to people you know, are you afraid of many things?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Does your attention easily stray from your work in the presence of an attractive stranger? ',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Do you often find yourself worrying about things to the extent that performance in intellectual abilities is impaired?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Are you interested in money to the point of being able to do risky jobs?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Do you often refrain from doing something you like in order not to be rejected or disapproved of by others?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Do you like to put competitive ingredients in all your activities',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Generally, do you pay more attention to threats than to pleasant events? ',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Would you like to be a socially powerful person?',
            'Type' => 'sr'
        ]);

        $question = Questions::create([
            'Question' => 'Do you often refrain from doing something because of your fear of being embarrassed?',
            'Type' => 'sp'
        ]);
        $question = Questions::create([
            'Question' => 'Do you like displaying your physical abilities even though this may involve danger?',
            'Type' => 'sr'
        ]);
    }

}
