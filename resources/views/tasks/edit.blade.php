<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
        body { font-family: 'Press Start 2P', cursive; }
        .pixel-border { box-shadow: -5px 0 0 0 #000, 5px 0 0 0 #000, 0 -5px 0 0 #000, 0 5px 0 0 #000; }
    </style>
</head>
<body class="bg-yellow-200 p-8">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-black text-center">Edit Task</h1>
        <div class="bg-white pixel-border p-4">
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-bold mb-2">Title</label>
                    <input type="text" id="title" name="title" class="w-full p-2 border-4 border-black" value="{{ $task->title }}" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-bold mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" class="w-full p-2 border-4 border-black" required>{{ $task->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="completed" class="block text-sm font-bold mb-2">Status</label>
                    <select id="completed" name="completed" class="w-full p-2 border-4 border-black">
                        <option value="0" {{ $task->completed ? '' : 'selected' }}>Waiting</option>
                        <option value="1" {{ $task->completed ? 'selected' : '' }}>Done</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 border-4 border-black">Update Task</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
