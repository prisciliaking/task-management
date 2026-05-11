<div x-show="showEditModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 overflow-y-auto"
    x-cloak x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">

    <div @click.away="showEditModal = false"
        class="bg-white w-full max-w-lg rounded-3xl shadow-2xl overflow-hidden relative">

        <div class="bg-tropical-teal h-3 w-full"></div>

        <div class="p-8">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Edit Task</h2>
                    <p class="text-gray-400 text-xs mt-1">Modify your task details</p>
                </div>
                <button @click="showEditModal = false"
                    class="text-gray-400 hover:text-gray-600 text-2xl leading-none">&times;</button>
            </div>

            <form :action="'/tasks/' + editTask.id" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Title</label>
                    <input type="text" name="title" x-model="editTask.title"
                        class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 focus:ring-4 focus:ring-tropical-teal/20 text-gray-700 font-medium"
                        required>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Describe</label>
                    <textarea name="description" x-model="editTask.description" rows="3"
                        class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 focus:ring-4 focus:ring-tropical-teal/20 text-gray-700"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Due
                            Date</label>
                        <input type="datetime-local" name="due_date" x-model="editTask.due_date"
                            class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 text-[11px] text-gray-600">
                    </div>

                    <div>
                        <label
                            class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Category</label>
                        <input type="text" name="category" x-model="editTask.category"
                            class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 text-gray-700">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Update
                        Status</label>
                    <select name="status" x-model="editTask.status"
                        class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 focus:ring-4 focus:ring-tropical-teal/20 text-gray-700 font-bold uppercase text-xs">
                        <option value="on going">🟠 ON GOING</option>
                        <option value="pending">🟡 PENDING</option>
                        <option value="completed">🟢 COMPLETED</option>
                    </select>
                </div>

                <div class="pt-4 flex gap-3">
                    <button type="submit"
                        class="flex-1 bg-tropical-teal text-white font-bold py-4 rounded-2xl shadow-lg hover:scale-[1.02] transition-transform shadow-teal-100">
                        SAVE CHANGES
                    </button>
                    <button type="button" @click="showEditModal = false"
                        class="px-6 bg-gray-100 text-gray-500 font-bold py-4 rounded-2xl hover:bg-gray-200 transition">
                        CANCEL
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
