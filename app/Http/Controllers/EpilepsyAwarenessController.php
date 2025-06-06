<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class EpilepsyAwarenessController extends Controller
{
    // public function index()
    // {
    //     return view('epilepsy-awareness');
    // }

    public function show()
    {
        $facts = [
            'Epilepsy is the 4th most common neurological disorder in the world.',
            '1 in 26 people will develop epilepsy in their lifetime.',
            '65 million people worldwide have epilepsy.',
            'In 70% of cases, the cause of epilepsy is unknown.',
            'Epilepsy is not contagious and is not a mental illness.'
        ];

        $firstAid = [
            'Stay calm and time the seizure',
            'Clear the area of hard or sharp objects',
            'Cushion the head if the person is on the ground',
            'Do not restrain the person or put anything in their mouth',
            'Turn the person on their side if they have food or liquid in their mouth',
            'Stay with the person until the seizure ends naturally',
            'Call emergency services if the seizure lasts more than 5 minutes or if another seizure follows'
        ];

        $myths = [
            'MYTH: You should put something in a person\'s mouth during a seizure.',
            'TRUTH: This can cause injury. The person cannot swallow their tongue.',
            'MYTH: Epilepsy is a mental illness.',
            'TRUTH: It\'s a neurological condition caused by abnormal brain activity.',
            'MYTH: People with epilepsy can\'t work or live normal lives.',
            'TRUTH: With proper treatment, most people with epilepsy can work and live full lives.',
            'MYTH: Seizures are always dramatic convulsions.',
            'TRUTH: There are many types of seizures, some very subtle.'
        ];

        $scriptUrl = asset('js/story.js');

        $stories = Story::latest()->take(8)->get();

        return view('epilepsy-awareness', compact('facts', 'firstAid', 'myths', 'scriptUrl', 'stories'));
    }
}