<div x-show="showCreateModal"
    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 overflow-y-auto" x-cloak>
    <div @click.away="showCreateModal = false"
        class="bg-white w-full max-w-lg rounded-3xl shadow-2xl overflow-hidden p-8 animate-in fade-in zoom-in duration-300">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800 font-poppins">Create New Task</h2>
            <button @click="showCreateModal = false" class="text-gray-400 hover:text-gray-600">&times;</button>
        </div>

        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Title</label>
                <input type="text" name="title"
                    class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 focus:ring-4 focus:ring-tropical-teal/20"
                    required>
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Describe</label>
                <textarea name="description" rows="3"
                    class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 focus:ring-4 focus:ring-tropical-teal/20"></textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Due
                        Date</label>
                    <input type="datetime-local" name="due_date"
                        class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 text-xs">
                </div>
                <div>
                    <label
                        class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Category</label>
                    <input type="text" name="category" class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3"
                        placeholder="e.g. Work">
                </div>
            </div>
            <button type="submit"
                class="w-full bg-tropical-teal text-white font-bold py-4 rounded-2xl shadow-lg mt-4">CREATE
                TASK</button>
        </form>
    </div>
</div>