<div class="space-y-4">
    <div class="{{ $config['color'] }} p-3 rounded-xl shadow-sm flex justify-between items-center">
        <h3 class="font-bold text-gray-800 uppercase tracking-wider text-sm font-poppins">
            {{ $config['label'] }}
        </h3>
        <span class="bg-white/50 px-2 py-0.5 rounded-full text-xs font-bold font-poppins text-gray-700">
            {{ isset($tasksGrouped[$statusKey]) ? $tasksGrouped[$statusKey]->count() : 0 }}
        </span>
    </div>

    <div class="space-y-4">
        @forelse($tasksGrouped->get($statusKey, []) as $task)
            {{-- Memanggil Komponen Card --}}
            @include('tasks.components.task-card', ['task' => $task])
        @empty
            <div class="flex flex-col items-center justify-center py-10 bg-white/30 rounded-2xl border-2 border-dashed border-gray-200">
                <p class="text-center text-gray-400 text-xs italic font-poppins">No tasks in {{ $config['label'] }}</p>
            </div>
        @endforelse
    </div>
</div>