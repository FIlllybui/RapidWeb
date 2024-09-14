<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8-Bit Task List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
        body { font-family: 'Press Start 2P', cursive; }
        .pixel-border { box-shadow: -5px 0 0 0 #000, 5px 0 0 0 #000, 0 -5px 0 0 #000, 0 5px 0 0 #000; }
    </style>
</head>
<body class="bg-yellow-200 p-8">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-black text-center">Task List</h1>
        
        <!-- Add the new button here -->
        <div class="mb-4 text-center">
            <a href="{{ route('tasks.create') }}" class="inline-block bg-green-500 text-white px-4 py-2 pixel-border hover:bg-green-600 transition-colors">
                Create New Task
            </a>
        </div>

        <div class="bg-white pixel-border p-4">
            <table class="w-full border-collapse">
                <thead class="bg-blue-500">
                    <tr>
                        <th class="p-2 text-left text-xs text-white border-4 border-black">Title</th>
                        <th class="p-2 text-left text-xs text-white border-4 border-black">Description</th>
                        <th class="p-2 text-left text-xs text-white border-4 border-black">Status</th>
                        <th class="p-2 text-left text-xs text-white border-4 border-black">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr class="border-4 border-black">
                        <td class="p-2 border-4 border-black">{{$task->title}}</td>
                        <td class="p-2 border-4 border-black">{{$task->description}}</td>
                        <td class="p-2 border-4 border-black">
                            @if($task->completed == 1)
                                <span class="px-2 py-1 bg-green-500 text-white">Done</span>
                            @else
                                <span class="px-2 py-1 bg-red-500 text-white">Waiting</span>
                            @endif
                        </td>
                        <td class="p-2 border-4 border-black">
                            <div class="flex flex-col space-y-2">
                                <a href="{{ route('tasks.edit', $task->id) }}" class="inline-block bg-blue-500 text-white text-xs px-2 py-1 pixel-border hover:bg-blue-600 transition-colors text-center">
                                    Edit
                                </a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full bg-red-500 text-white text-xs px-2 py-1 pixel-border hover:bg-red-600 transition-colors" onclick="return confirm('Are you sure you want to delete this task?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>