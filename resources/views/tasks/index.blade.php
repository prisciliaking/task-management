<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/task-logic.js'])
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .bg-tropical-orange {
            background-color: #FF8243;
        }

        .bg-tropical-pink {
            background-color: #FFC0CB;
        }

        .bg-tropical-yellow {
            background-color: #FCE883;
        }

        .bg-tropical-teal {
            background-color: #069494;
        }
    </style>
</head>

<body x-data="{ showCreateModal: false, showEditModal: false, editTask: {} }" class="bg-gray-50 min-h-screen">
    @include('tasks.components.header')

    <main class="max-w-6xl mx-auto px-6">
        @include('tasks.components.search-bar')

        @php
            // Definisikan variabel ini di file index utama
            $sections = [
                'on going' => ['color' => 'bg-tropical-orange', 'label' => 'On Going'],
                'pending' => ['color' => 'bg-tropical-yellow', 'label' => 'Pending'],
                'completed' => ['color' => 'bg-tropical-pink', 'label' => 'Completed'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($sections as $statusKey => $config)
                {{-- PANGGIL KOMPONEN KOLOM --}}
                @include('tasks.components.category-column', [
                    'statusKey' => $statusKey,
                    'config' => $config,
                    'tasksGrouped' => $tasksGrouped,
                ])
            @endforeach
        </div>
    </main>

    @include('tasks.components.footer')

    @include('tasks.components.modal-create')
    @include('tasks.components.modal-edit')

    @stack('scripts')
</body>

</html>

