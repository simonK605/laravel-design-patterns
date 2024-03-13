<?php

class SomeController extends Controller
{

    public function index()
    {
        // Create a subject
        $subject = new Post();

        // Create observers
        $observer1 = new SomeObserver('Observer 1');
        $observer2 = new SomeObserver('Observer 2');

        // Attach observers to the subject
        $subject->addObserver($observer1);
        $subject->addObserver($observer2);

        // Notify observers of a change in the subject's state
        $subject->notifyObservers('State updated');
    }
}
