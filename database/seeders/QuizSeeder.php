<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        Quiz::insert([
            [
                'category' => 'encapsulation',
                'question' => 'What does encapsulation mean in Java?',
                'a' => 'Combining data and methods into a single unit.',
                'b' => 'Separating data from methods.',
                'c' => 'Accessing private data directly.',
                'd' => 'Hiding methods from other classes.',
                'correct' => 'a',
                'explanation' => "Encapsulation is the bundling of data and methods that operate on the data into a single unit. It is used to hide the internal state of an object and restrict access to the object's data.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => 'is this polymorphism?',
                'a' => 'Security',
                'b' => 'Flexibility',
                'c' => 'Code complexity',
                'd' => 'Maintainability',
                'correct' => 'c',
                'explanation' => "Encapsulation helps improve security, flexibility, and maintainability by hiding the internal state of an object. It does not increase code complexity.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => 'is this injeritance?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],

            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],[
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],[
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],[
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],[
                'category' => 'abstraction',
                'question' => 'is this abstraction?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'is this intro to oop?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'is this java?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
        ]);
    }
}
