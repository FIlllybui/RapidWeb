<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
        body { font-family: 'Press Start 2P', cursive; }
        .pixel-border { box-shadow: -5px 0 0 0 #000, 5px 0 0 0 #000, 0 -5px 0 0 #000, 0 5px 0 0 #000; }
    </style>
</head>
<body class="bg-yellow-200 p-8">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-black text-center">Create Task</h1>
        <div class="bg-white pixel-border p-4">
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-bold mb-2">Title</label>
                    <input type="text" id="title" name="title" class="w-full p-2 border-4 border-black" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-bold mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" class="w-full p-2 border-4 border-black" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="completed" class="block text-sm font-bold mb-2">Status</label>
                    <select id="completed" name="completed" class="w-full p-2 border-4 border-black">
                        <option value="0">Waiting</option>
                        <option value="1">Done</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-bold mb-2">Category</label>
                    <select id="category_id" name="category_id" class="w-full p-2 border-4 border-black">
                        <option value="">Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 border-4 border-black">Create Task</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>