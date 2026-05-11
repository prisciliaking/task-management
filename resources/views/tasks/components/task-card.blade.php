<div class="bg-white p-5 rounded-2xl shadow-sm border-b-4 border-tropical-teal/10 hover:shadow-md transition">
    <div class="flex justify-between items-start mb-3">
        <span class="px-2 py-0.5 bg-tropical-teal/10 text-tropical-teal text-[10px] uppercase font-bold rounded-md tracking-wider">
            {{ $task->category }}
        </span>
        <span class="text-[10px] text-gray-400 font-medium font-poppins">
            Added {{ $task->created_at->format('H:i') }}
        </span>
    </div>

    <h4 class="font-semibold text-gray-800 mb-1 leading-tight font-poppins">{{ $task->title }}</h4>
    <p class="text-gray-500 text-xs mb-4 line-clamp-2 font-poppins">{{ $task->description }}</p>

    <div class="flex items-center gap-2 mb-4 p-2 bg-gray-50 rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-tropical-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="text-[10px] font-bold text-gray-600 font-poppins">Due:</span>
        <span class="text-[10px] text-gray-500 font-poppins">
            {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('d M, H:i') : 'No deadline' }}
        </span>
    </div>

    <div class="flex gap-2 border-t pt-4">
        @if ($task->status !== 'completed')
            <form action="{{ route('tasks.complete', $task) }}" method="POST" class="flex-1">
                @csrf @method('PATCH')
                <button class="w-full py-2 bg-tropical-teal text-white rounded-xl text-[10px] font-bold hover:bg-opacity-90 transition shadow-sm font-poppins">
                    DONE
                </button>
            </form>

            <button @click="
                let task = {{ $task->toJson() }}; 
                if(task.due_date) {
                    task.due_date = new Date(task.due_date).toISOString().slice(0, 16);
                }
                editTask = task; 
                showEditModal = true;"
                class="px-4 py-2 bg-gray-100 text-gray-500 rounded-xl text-[10px] font-bold hover:bg-gray-200 transition font-poppins">
                EDIT
            </button>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                @csrf @method('DELETE')
                <button class="p-2 text-red-300 hover:text-red-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </form> 
        @endif
    </div>
</div>