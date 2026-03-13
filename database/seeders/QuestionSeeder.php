<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [

            [
                'text' => 'What does Clean Code mean?',
                'hint' => 'Think about readability and maintainability.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'Code that is easy to read and maintain', 'isCorrect' => true],
                    ['answer' => 'Code with no comments', 'isCorrect' => false],
                    ['answer' => 'Code written very quickly', 'isCorrect' => false],
                    ['answer' => 'Code without functions', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What does SOLID represent?',
                'hint' => 'It is a set of 5 principles for object-oriented design.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'Five principles for writing maintainable OOP code', 'isCorrect' => true],
                    ['answer' => 'A CSS framework', 'isCorrect' => false],
                    ['answer' => 'A PHP compiler', 'isCorrect' => false],
                    ['answer' => 'A database system', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What does DRY stand for?',
                'hint' => 'Avoid repeating yourself.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'Don’t Repeat Yourself', 'isCorrect' => true],
                    ['answer' => 'Do Repeat Yourself', 'isCorrect' => false],
                    ['answer' => 'Debug Regularly Yourself', 'isCorrect' => false],
                    ['answer' => 'Data Response Yield', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What does KISS mean in programming?',
                'hint' => 'Keep things simple.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'Keep It Simple, Stupid', 'isCorrect' => true],
                    ['answer' => 'Keep It Secure System', 'isCorrect' => false],
                    ['answer' => 'Keep Intelligent Software Safe', 'isCorrect' => false],
                    ['answer' => 'Known Integrated Software Standard', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What does YAGNI stand for?',
                'hint' => 'Do not implement features until necessary.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'You Aren’t Gonna Need It', 'isCorrect' => true],
                    ['answer' => 'You Always Get New Ideas', 'isCorrect' => false],
                    ['answer' => 'Your App Generates New Interfaces', 'isCorrect' => false],
                    ['answer' => 'Yet Another Great Node Interface', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What is PSR in PHP?',
                'hint' => 'PHP coding standards.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'PHP Standard Recommendations', 'isCorrect' => true],
                    ['answer' => 'Private Script Rules', 'isCorrect' => false],
                    ['answer' => 'Program Security Regulation', 'isCorrect' => false],
                    ['answer' => 'Primary Server Routing', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What does GDPR regulate?',
                'hint' => 'European Union law.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'Data protection and privacy', 'isCorrect' => true],
                    ['answer' => 'Web design standards', 'isCorrect' => false],
                    ['answer' => 'Database indexing', 'isCorrect' => false],
                    ['answer' => 'API development', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What are design patterns?',
                'hint' => 'Reusable solutions.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'Reusable solutions to common programming problems', 'isCorrect' => true],
                    ['answer' => 'Database schemas', 'isCorrect' => false],
                    ['answer' => 'UI templates', 'isCorrect' => false],
                    ['answer' => 'Server configurations', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What does MVC stand for?',
                'hint' => 'A common architecture pattern.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'Model View Controller', 'isCorrect' => true],
                    ['answer' => 'Main View Controller', 'isCorrect' => false],
                    ['answer' => 'Modern Visual Code', 'isCorrect' => false],
                    ['answer' => 'Multi Version Control', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What is version control?',
                'hint' => 'Think Git.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'Tracking changes in code over time', 'isCorrect' => true],
                    ['answer' => 'Controlling software licenses', 'isCorrect' => false],
                    ['answer' => 'Deploying applications', 'isCorrect' => false],
                    ['answer' => 'Encrypting databases', 'isCorrect' => false],
                ]
            ],

            // Laravel questions

            [
                'text' => 'What command creates a Laravel controller?',
                'hint' => 'Use artisan.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'php artisan make:controller', 'isCorrect' => true],
                    ['answer' => 'php artisan controller:create', 'isCorrect' => false],
                    ['answer' => 'php artisan new:controller', 'isCorrect' => false],
                    ['answer' => 'php artisan generate:controller', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What is Eloquent in Laravel?',
                'hint' => 'ORM.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'Laravel’s ORM for interacting with databases', 'isCorrect' => true],
                    ['answer' => 'Laravel template engine', 'isCorrect' => false],
                    ['answer' => 'Routing system', 'isCorrect' => false],
                    ['answer' => 'Authentication package', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'Which file defines web routes in Laravel?',
                'hint' => 'Inside the routes folder.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'routes/web.php', 'isCorrect' => true],
                    ['answer' => 'routes/api.php', 'isCorrect' => false],
                    ['answer' => 'app/routes.php', 'isCorrect' => false],
                    ['answer' => 'config/routes.php', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What Blade directive is used for loops?',
                'hint' => 'Starts with @.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => '@foreach', 'isCorrect' => true],
                    ['answer' => '@loop', 'isCorrect' => false],
                    ['answer' => '@repeat', 'isCorrect' => false],
                    ['answer' => '@iterate', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What does ORM stand for?',
                'hint' => 'Database abstraction.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'Object Relational Mapping', 'isCorrect' => true],
                    ['answer' => 'Open Resource Management', 'isCorrect' => false],
                    ['answer' => 'Object Routing Method', 'isCorrect' => false],
                    ['answer' => 'Operational Resource Model', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What is refactoring?',
                'hint' => 'Improving code without changing behavior.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'Improving internal code structure', 'isCorrect' => true],
                    ['answer' => 'Deleting old code', 'isCorrect' => false],
                    ['answer' => 'Writing documentation', 'isCorrect' => false],
                    ['answer' => 'Adding new features', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What is dependency injection?',
                'hint' => 'Laravel uses it heavily.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'Passing dependencies into a class', 'isCorrect' => true],
                    ['answer' => 'Installing packages', 'isCorrect' => false],
                    ['answer' => 'Injecting SQL queries', 'isCorrect' => false],
                    ['answer' => 'Loading CSS files', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What is an API?',
                'hint' => 'Communication between software.',
                'difficulty' => 'easy',
                'answers' => [
                    ['answer' => 'Interface for communication between systems', 'isCorrect' => true],
                    ['answer' => 'A frontend framework', 'isCorrect' => false],
                    ['answer' => 'A database engine', 'isCorrect' => false],
                    ['answer' => 'A programming language', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What is middleware in Laravel?',
                'hint' => 'Runs between request and response.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'Filters HTTP requests', 'isCorrect' => true],
                    ['answer' => 'Database models', 'isCorrect' => false],
                    ['answer' => 'Frontend templates', 'isCorrect' => false],
                    ['answer' => 'Queue workers', 'isCorrect' => false],
                ]
            ],

            [
                'text' => 'What does REST stand for?',
                'hint' => 'API architecture style.',
                'difficulty' => 'medium',
                'answers' => [
                    ['answer' => 'Representational State Transfer', 'isCorrect' => true],
                    ['answer' => 'Remote Execution Standard Technology', 'isCorrect' => false],
                    ['answer' => 'Rapid Endpoint Service Tool', 'isCorrect' => false],
                    ['answer' => 'Resource Encoding Security Token', 'isCorrect' => false],
                ]
            ],

        ];

        foreach ($questions as $q) {

            $questionId = DB::table('questions')->insertGetId([
                'text' => $q['text'],
                'hint' => $q['hint'],
                'difficulty' => $q['difficulty'],
                'created_at' => now(),
                'updated_at' => now()
            ]);

            foreach ($q['answers'] as $answer) {

                DB::table('answers')->insert([
                    'questionId' => $questionId,
                    'answer' => $answer['answer'],
                    'isCorrect' => $answer['isCorrect'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

            }
        }
    }
}
