# Install react with laravel
    -Laravel Mix : Vous pouvez également utiliser Laravel Mix pour compiler les fichiers JavaScript React.
    -Laravel Livewire : Bien que ce soit principalement pour la création d'applications sans JavaScript, vous pouvez l'utiliser pour intégrer des composants React dans vos vues Laravel.
    -Laravel Jetstream : Jetstream propose une intégration avec Inertia.js, qui peut être utilisé pour construire des applications React sans API.
En u
# Live wire
    php artisan make:livewire counter
    app/Livewire/Counter.php
    resources/views/livewire/counter.blade.php
    !! ** Les composants Livewire DOIVENT avoir un seul élément racine
    # php artisan livewire:layout -> pour génèrer de fichier

# Laravel Inertia
    *Le package inertiajs/inertia-laravel est un wrapper Laravel pour le framework JavaScript Inertia.js.   
    --Server side
    composer require inertiajs/inertia-laravel 
    1. installer le package inertia 
    2. config le modèle racine de la vue -> app.blade.php
    3. publier le midlleware
    --Client side
    1. 
