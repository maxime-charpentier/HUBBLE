<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Origin');
header('Content-Type: application/json; charset=utf-8');

$posts = [
    [
    'image' => [
        'src' => 'src/images/NurseryPlantsGrower.jpg',
        'alt' => 'Nursery Plants Grower',
    ],
    'label' => 'Food & Environment',
    'title' => 'Nursery<br>Plants Grower',
    'term' => '6 months mission',
    'location' => 'Orilla Planet',
    'salary' => '2200 SC',
    'description' => 'Provide daily nursery oversight and management, communicating with staff regarding schedules and assignment of duties. Oversees overall nursery work flow. Nursery growers raise and sell plants, flowers, shrubs, and trees. Some plants are grown from seed in the nursery, outside in beds, or inside in greenhouses.',
    ],
    [
    'image' => [
        'src' => 'src/images/CyborgPsychologist.jpg',
        'alt' => 'Cyborg Psychologist',
    ],
    'label' => 'Health',
    'title' => 'Cyborg<br>Psychologist',
    'term' => '1 year mission',
    'location' => 'Tatooine Planet',
    'salary' => '2000 SC',
    'description' => 'As advancing technology allows scientists to create increasingly elaborate synthetic organs and robotic limbs, more people will need to deal with living as part-machines. A Cyborg Psychologists is a mental health professionals who will specialize in helping people come to terms with living as cyborgs.',
    ],
    [
    'image' => [
        'src' => 'src/images/QuantumMachineLearningAnalyst.jpg',
        'alt' => 'QuantumMachineLearningAnalyst',
    ],
    'label' => 'Energy & Transport',
    'title' => 'Quantum Machine<br>Learning Analyst',
    'term' => '1 year mission',
    'location' => 'Nibiru Planet',
    'salary' => '1800 SC',
    'description' => 'Quantum computing is the future of computing, and machine learning is at the core of the ongoing AI revolution. When extremely fast computing is combined with self-learning algorithms, unimaginable levels of performance can be achieved, and business problems solved, that are computationally intractable with today’s supercomputers. Our mission is to take a quantum-assisted, AI-driven leap into the future. We are interested in building machine learning algorithms for currently envisioned quantum computing devices as well as quantum-inspired algorithms that can be implemented on today’s computers.',
    ],
    [
    'image' => [
        'src' => 'src/images/HyperLoopMechanics.jpg',
        'alt' => 'HyperLoop Mechanics',
    ],
    'label' => 'Aero Space',
    'title' => 'HyperLoop<br>Mechanics',
    'term' => '+1 year mission',
    'location' => 'The Moon',
    'salary' => '1700 SC',
    'description' => 'Through those past centuries, hyper loop mechanics has been developed and became the standard way to move around. But there is still some research to be done to improve the speed.',
    ],
    [
    'image' => [
        'src' => 'src/images/DigitalDeathManager.jpg',
        'alt' => 'Digital Death Manager',
    ],
    'label' => 'Business',
    'title' => 'Digital Death<br>Manager',
    'term' => '6 months mission',
    'location' => 'Neptune',
    'salary' => '3000 SC',
    'description' => 'This person makes sure that all information about you will be deleted once you are dead. In other words, he manages the community of the deceased in the same way that a community manager manages the community of a brand.',
    ],
    [
    'image' => [
        'src' => 'src/images/PersonalMemoryCurator.jpg',
        'alt' => 'Personal Memory Curator',
    ],
    'label' => 'Personal Branding',
    'title' => 'Personal Memory<br>Curator',
    'term' => '+1 year mission',
    'location' => 'Pandora',
    'salary' => '1650 SC',
    'description' => 'As a personal memory curator, you will consult with patients and stakeholders to generate specifications for virtual reality experiences that bring a particular time, place or event to life. The ideal candidate will have a high degree of emotional intelligence to uncover lost memories and experiences, together with a solid grounding in virtual reality simulation techniques. Tailoring and managing the “advance memory statement” is a central requirement of the role.',
    ],
    [
    'image' => [
        'src' => 'src/images/DreamSpecialist.jpg',
        'alt' => 'Dream Specialist',
    ],
    'label' => 'Tech',
    'title' => 'Dream<br>Specialist',
    'term' => '+1 year mission',
    'location' => 'Theed, Naboo',
    'salary' => '5000 SC',
    'description' => 'Alternative energy sources are the only hope. Solar, wind and hydroelectric energy is already implemented a lot. The question is, which one is right for your home, your community and your city? An expert in all things energy and go from city to city around the world assessing the best sustainable energy source for each place.',
    ],
    [
    'image' => [
        'src' => 'src/images/SpaceGarbageDesigner.jpg',
        'alt' => 'Space Garbage Designer',
    ],
    'label' => 'Machine & Maintenance',
    'title' => 'Space Garbage<br>Designer',
    'term' => '6 months mission',
    'location' => 'Mongo Planet',
    'salary' => '2400 SC',
    'description' => 'These designers will make careers out of perfecting the art of upcycling. Upcycling is a way to use trash to create new, better quality items. Garbage designers will see to it that upcycling attempts are efficient and successful, designing ways to make new items with very little waste. The requirements for this job will include a background in materials science and engineering, and with industrial design.',
    ],
    [
    'image' => [
        'src' => 'src/images/SpaceShipSecurityOfficer.jpg',
        'alt' => 'SpaceShip Security Officer',
    ],
    'label' => 'Security',
    'title' => 'SpaceShip Security<br>Officer',
    'term' => '6 months mission',
    'location' => 'Omega Nebula Station',
    'salary' => '2500 SC',
    'description' => 'The Ship Security Officer is appointed by the security company and the ship’s master to ensuring vessel security. As a Ship Security Officer, you are responsible to implementing and maintaining the ship security plan. This involves creating a concise flow of communication by liaising with the Company Ship Officer, as well as security officers from other ships, ports, port facilities and associated service providers.',
    ]
];


echo json_encode($posts);
